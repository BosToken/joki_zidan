<?php

namespace App\Http\Controllers;

use App\Actions\AuthAction;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function auth(Request $request, AuthAction $authAction)
    {
        $login = $authAction->loginUser($request);

        if ($login) {
            if ($login['role'] == 'Admin') {
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('dasbor');
            }
        }
        return back();
    }
}
