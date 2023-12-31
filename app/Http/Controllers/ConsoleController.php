<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsoleController extends Controller
{
    //

    public function dashboard() {
        return view('console.dashboard');
    }

    public function loginForm() {
        return view('console.login');
    }

    public function login() {

        $attributes = request() ->validate( [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        //ak je uspesny
        if(auth()->attempt($attributes)) {
            return redirect('/console/dashboard');
        }
        return back()
            ->withInput()
            ->withErrors(['email' => 'Nesprávná kompináciua emailu a hesla']);

    }

    public function logout() {
        auth()->logout();
        return redirect('/');
    }




}
