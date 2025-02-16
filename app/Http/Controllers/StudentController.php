<?php

namespace App\Http\Controllers;

use App\Actions\BookAction;
use App\Actions\RentAction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function dasbor(RentAction $rentAction, BookAction $bookAction)
    {
        $histories = $rentAction->getByStudentId(Auth::user()->student_id);
        $buku = count($bookAction->get());
        $dipinjam = count($rentAction->getByStatus('Dipinjam'));
        $dikembalikan = count($rentAction->getByStatus('Dikembalikan'));

        $data = [
            'buku' => $buku,
            'dipinjam' => $dipinjam,
            'dikembalikan' => $dikembalikan
        ];
        return view('user.dashboard', compact('data', 'histories'));
    }

    public function peminjaman(BookAction $bookAction)
    {
        $datas = $bookAction->get();
        return view('user.peminjaman', compact('datas'));
    }

    public function borrow(RentAction $rentAction, BookAction $bookAction, $id)
    {
        $stok = $bookAction->getById($id)->stock;
        if (!$stok <= 0) {
            $bookAction->updateStock($stok - 1, $id);
            $data = [
                'status' => 'Pengajuan',
                'student_id' => Auth::user()->student_id,
                'book_id' => $id,
            ];
            $request = Request::create('/', 'POST', $data);
            $rentAction->store($request);
        }

        return redirect()->route('list-buku');
    }

    public function list_buku(RentAction $rentAction)
    {
        $datas = $rentAction->getByStudentId(Auth::user()->student_id);
        return view('user.list-buku', compact('datas'));
    }

    public function return_borrow(RentAction $rentAction, BookAction $bookAction, $id)
    {
        $data = $rentAction->getById($id);
        $book = $bookAction->getById($data['book_id']);
        $bookAction->updateStock(($book['stock'] + 1), $data['book_id']);
        $rentAction->update('Dikembalikan', $id);
        return redirect()->route('list-buku');
    }

    public function cancel_borrow(RentAction $rentAction, BookAction $bookAction, $id)
    {
        $stock = $rentAction->getById($id)->books[0]['stock'];
        $book_id = $rentAction->getById($id)->books[0]['id'];
        $bookAction->updateStock($stock + 1, $book_id);
        $rentAction->delete($id);
        return redirect()->route('list-buku');
    }
}
