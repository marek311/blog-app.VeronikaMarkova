<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request() ->validate( [
            'name' => ['required','min:7','max:20'],
            'username' => ['required', 'min:7','max:20', Rule::unique('users','username')],
            'email' => ['required', 'email','max:255', Rule::unique('users','email')],
            'password' => ['required', 'min:7','max:20'],
        ]);

        $attributes['password'] = bcrypt($attributes['password']);

        $user = User::create( $attributes);

        auth()->login($user);

        return redirect('/')->with('success','Your account has been created');
    }



}
