<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
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
<<<<<<< HEAD
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);
=======
            'name' => ['required'],
            'email' => ['required','unique:users,email'],
            'password' => ['required', 'confirmed']
        ]);

>>>>>>> f749806 (3.0ValidatedData)
        $user = new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();

        return redirect('/login');

    }
}

