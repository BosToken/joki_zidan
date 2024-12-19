<?php

namespace App\Actions;

use App\Models\Rent;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RentAction
{
    /**
     * @param \Illuminate\Http\Request
     * @return false|string $token
     */
    public function get()
    {
        $datas = Rent::with('students', 'books')->get();
        return $datas;
    }

    public function getById($id)
    {
        $data = Rent::with('students', 'books')->find($id);
        return $data;
    }

    public function getByBookId($id)
    {
        $datas = Rent::with('students', 'books')->where('book_id', $id)->get();
        return $datas;
    }

    public function getByStudentId($id)
    {
        $datas = Rent::with('students', 'books')->where('student_id', $id)->get();
        return $datas;
    }

    public function getByStatus($status)
    {
        $datas = Rent::with('books', 'students')->where('status', $status)->get();
        return $datas;
    }

    public function store(Request $request)
    {
        $rent = new Rent();
        $rent->id = Str::uuid()->toString();
        $rent->student_id = $request['student_id'];
        $rent->book_id = $request['book_id'];
        $rent->status = $request['status'];
        $rent->save();
    }

    public function update($status, $id)
    {
        $data = Rent::find($id);
        $data->status = $status;
        $data->save();
    }

    public function delete($id){
        Rent::find($id)->delete();
     }
}
