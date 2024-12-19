<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actions\AuthAction;
use App\Actions\BookAction;
use App\Actions\RentAction;
use App\Actions\StudentAction;
use App\Models\Student;

class AdminController extends Controller
{
    public function dashboard(StudentAction $studentAction, BookAction $bookAction, RentAction $rentAction)
    {
        $student = count($studentAction->get());
        $book = count($bookAction->get());
        $borrow = count($rentAction->getByStatus('Dipinjam'));
        $return = count($rentAction->getByStatus('Dikembalikan'));
        $data = [
            'student' => $student,
            'book' => $book,
            'borrow' => $borrow,
            'return' => $return
        ];
        return view('admin.dashboard', compact('data'));
    }

    public function master_book(BookAction $bookAction)
    {
        $books = $bookAction->get();
        return view('admin.books.book', compact('books'));
    }

    public function add_book(){
        return view('admin.books.add');
    }

    public function edit_book(BookAction $bookAction, $id){
        $data = $bookAction->getById($id);
        return view('admin.books.edit', compact('data'));
    }

    public function update_book(BookAction $bookAction, Request $request, $id){
        $bookAction->update($request, $id);
        return redirect()->route('master-book');
    }

    public function store_book(BookAction $bookAction, Request $request){
        $bookAction->store($request);
        return redirect()->route('master-book');
    }

    public function deleteBook(BookAction $bookAction, $id){
        $bookAction->delete($id);
        return back();
    }

    public function master_student(StudentAction $studentAction){
        $datas = $studentAction->get();
        return view('admin.students.student', compact('datas'));
    }
    
    public function add_student(){
        return view('admin.students.add');
    }

    public function store_student(StudentAction $studentAction, Request $request){
        $studentAction->store($request);
        return redirect()->route('master-student');
    }

    public function edit_student(StudentAction $studentAction, $id){
        $data = $studentAction->getById($id);
        return view('admin.students.edit', compact('data'));
    }

    public function update_student(StudentAction $studentAction, Request $request, $id){
        $studentAction->update($request, $id);
        return redirect()->route('master-student');
    }

    public function deleteStudent(StudentAction $studentAction, $id){
        $studentAction->delete($id);
        return back();
    }

    public function rent_book(RentAction $rentAction){
        $datas = $rentAction->getByStatus('Pengajuan');
        return view('admin.rents.rent', compact('datas'));
    }

    public function return_book(RentAction $rentAction){
        $datas = $rentAction->getByStatus('Dikembalikan');
        return view('admin.rents.return', compact('datas'));
    }

    public function borrow_book(RentAction $rentAction){
        $datas = $rentAction->getByStatus('Dipinjam');
        return view('admin.rents.borrow', compact('datas'));
    }

    public function rent_confirmation(RentAction $rentAction, BookAction $bookAction, $id){
        $data = $rentAction->getById($id);
        $book = $bookAction->getById($data['book_id']);
        $bookAction->updateStock(($book['stock'] - 1), $data['book_id']);
        $rentAction->update('Dipinjam', $id);
        return redirect()->route('rent-book');
    }

    public function report_rent(BookAction $bookAction){
        $datas = $bookAction->get();
        return view('admin.reports.rent', compact('datas'));
    }

    public function info_rent(RentAction $rentAction, BookAction $bookAction, $id){
        $datas = $rentAction->getByBookId($id);
        $data = $bookAction->getById($id);
        return view('admin.reports.info-book', compact('datas', 'data'));
    }

    public function report_student(StudentAction $studentAction){
        $datas = $studentAction->get();
        return view('admin.reports.student', compact('datas'));
    }

    public function info_student(RentAction $rentAction, StudentAction $studentAction, $id){
        $datas = $rentAction->getByStudentId($id);
        $data = $studentAction->getById($id);
        return view('admin.reports.info-student', compact('datas', 'data'));
    }

    public function logout(AuthAction $action)
    {
        $action->logout();
        return redirect()->route('login');
    }
}
