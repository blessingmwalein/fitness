<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Symfony\Component\VarDumper\Cloner\Data;

class UserController extends Controller
{

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required | email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')
                        ->withSuccess('Signed in');
        }

        return redirect('login')->with('message', 'Credentials do not match our records');
    }

    public function logout(Request $request)
    {

            Session::flush();
            Auth::logout();

            return redirect('/');

    }

    public function store(Request $request)
    {
        $data = $request->validate([
           'name' => 'required',
           'email'=> 'required | email | unique:users',
           'password' => 'required | min:8'
        ]);

       $data['password'] = Hash::make($data['password']);


       $user = User::create($data);

       return redirect('/')->withSuccess('Thanks for registering');

    }




}
