<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function postSignUp(Request $request){

        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'username' => 'required|max:128',
            'password' => 'required|min:6'
        ]);

        $email = $request['email'];
        $username = $request['username'];
        $password = bcrypt($request['password']);

        $user = new User();
        $user->email = $email;
        $user->username = $username;
        $user->password = $password;

        $user->save();

        Auth::login($user);
    }

    public function postsignIn(Request $request){

        $this->validate($request, [

            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt(['username' => $request['email'], 'password'=> $request['password']])){
                return redirect()->route('dashboard');
        }

        return redirect() -> back();
    }
}
