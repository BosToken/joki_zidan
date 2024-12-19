<?php

namespace App\Actions;

use App\Models\User;
use App\Http\Resources\UserResource;
use Illuminate\Support\Str;
use App\Models\Book;
use App\Models\Rent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookAction
{
    /**
     * @param \Illuminate\Http\Request
     * @return false|string $token
     */

    public function get()
    {
        $datas = Book::all();
        return $datas;
    }

    public function getByName($name)
    {
        $datas = Book::where('name', $name)->get();
        return $datas;
    }

    public function getById($id)
    {
        $data = Book::find($id);
        return $data;
    }

    public function store(Request $request)
    {
        $book = new Book();
        $book->id = Str::uuid()->toString();
        $book->name = $request['name'];
        $book->category = $request['category'];
        $book->publisher = $request['publisher'];
        $book->publication_year = $request['publication_year'];
        $book->stock = $request['stock'];
        $book->save();
    }

    public function update(Request $request, $id)
    {
        $data = Book::find($id);
        $data->name = $request['name'];
        $data->category = $request['category'];
        $data->publisher = $request['publisher'];
        $data->publication_year = $request['publication_year'];
        $data->stock = $request['stock'];
        $data->save();
    }

    public function updateStock($stock, $id)
    {
        $data = Book::find($id);
        $data->stock = $stock;
        $data->save();
    }

    public function delete($id)
    {
        Rent::where('book_id', $id)->delete();
        Book::find($id)->delete();
    }
}
