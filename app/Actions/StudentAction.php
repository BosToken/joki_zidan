<?php

namespace App\Actions;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentAction
{
    /**
     * @param \Illuminate\Http\Request
     * @return false|string $token
     */

    public function get()
    {
        $datas = Student::with('rents.books')->get();
        return $datas;
    }

    public function getByName($name)
    {
        $datas = Student::with('rents.books')->where('name', $name)->get();
        return $datas;
    }

    public function getById($id)
    {
        $data = Student::with('rents.books')->find($id);
        return $data;
    }

    public function store(Request $request)
    {
        $data = new Student();
        $data->id = $request['id'];
        $data->name = $request['name'];
        $data->gender = $request['gender'];
        $data->nik = $request['nik'];
        $data->nisn = $request['nisn'];
        $data->date_of_birth = $request['date_of_birth'];
        $data->religion = $request['religion'];
        $data->address = $request['address'];
        $data->save();
    }

    public function update(Request $request, $id)
    {
        $data = Student::find($id);
        $data->name = $request['name'];
        $data->gender = $request['gender'];
        $data->nik = $request['nik'];
        $data->nisn = $request['nisn'];
        $data->date_of_birth = $request['date_of_birth'];
        $data->religion = $request['religion'];
        $data->address = $request['address'];
        $data->save();
    }

    public function delete($id){
        User::where('student_id', $id)->delete();
        Student::find($id)->delete();
    }
}
