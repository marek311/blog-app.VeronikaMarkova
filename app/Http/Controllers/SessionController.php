<?php

namespace App\Http\Controllers;


class SessionController extends Controller
{
    public function destroy()
    {
        auth()->logout();
        return redirect("/")->with('success','Goodbye!');

    }

    public function store()
    {
       $data =  request()->validate([
            'email'=> 'required|email',
            'password'=> 'required'
        ]);

        if(auth()->attempt($data)) {
            session()->regenerate();
            return redirect("/")->with('success', 'Vitaj späť!');
        }
        return back()
            ->withInput()
            ->withErrors(['email'=>'Zadaní email je nesprávny']);


    }


    public function create()
    {
        return view('sessions.create');

    }
}
