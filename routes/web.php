<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
Route::get('/logout', function () {
Route::get('/logout', function () {
    Auth::logout();
    return redirect('login');
});

Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('/login-facebook', function () {
    return Socialite::driver('facebook')->redirect();
});

Route::get('/facebook-callback', function () {
    $user = Socialite::driver('facebook')->user();

    dd($user);/* userExists = User::where('external_id', $user->id)->where('external_auth','google')->first();
    if($userExists){
        Auth::login($userExists);
    } else {
        $userNew = User::create([
            'name' => $user -> name,
            'email' => $user -> email,
            'external_id' => $user -> id,
            'external_auth' => 'google'
        ]);

        Auth::login($userNew);
    }

    return redirect('/'); */
});

Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();

    $userExists = User::where('external_id', $user->id)->where('external_auth','google')->first();
    if($userExists){
        Auth::login($userExists);
    } else {
        $userNew = User::create([
            'name' => $user -> name,
            'email' => $user -> email,
            'external_id' => $user -> id,
            'external_auth' => 'google'
        ]);

        Auth::login($userNew);
    }

    return redirect('/');
});

Route::view('/contact','contact');
Route::view('/register','register');
Route::post("/login",[UserController::class,'login']);
Route::post("/register",[UserController::class,'register']);
Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartList']);
Route::get("removecart/{id}",[ProductController::class,'removeCart']);
Route::get("ordernow",[ProductController::class,'orderNow']);
Route::post("orderplace",[ProductController::class,'orderPlace']);
Route::get("myorders",[ProductController::class,'myOrder']);
Route::get("pdfreport",[ProductController::class,'Print']);
