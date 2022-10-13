<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user = User::where(['email' => $req->email])->first();
        if (!$user || !Hash::check($req->password, $user->password)) 
        {
            return redirect('/login');
        } else {
            $req->session()->put('user', $user);
            return redirect('/');
        }
    }

    public function register(Request $req){

        //validación de los datos de registro

        $req->validate([
            'name' => ['required'],
            'email' => ['required','unique:users,email'],
            'password' => ['required', 'confirmed'],
            'g-recaptcha-response' => 'required|captcha'
        ]);

        $user = new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
        Auth::login($user);

        return redirect('/');

    }
}

