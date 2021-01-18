<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {

    public function __invoke(Request $request) {
        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role->code === 'ADMIN') {
                return redirect('/admin/schools/');
            } else {
                return redirect('/moderator/schools/');
            }
        }

        return redirect('/login');
    }

    public function username()
    {
        return 'name';
    }

}
