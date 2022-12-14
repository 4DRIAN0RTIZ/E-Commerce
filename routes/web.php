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
Route::view('/productindex','productindex')->name('productindex');
Route::view('productshow','productshow')->name('productshow');
Route::view('/productedit','productedit')->name('productedit');
Route::view('/productcreate','productcreate')->name('productcreate');
Route::resource('product',ProductController::class)->middleware('auth');
Route::view('/prueba','prueba');
Route::view('/dashboard','dashboard');
Route::view('/contact','contact');
Route::view('/register','register');
Route::post("/login",[UserController::class,'login']);
Route::post("/register",[UserController::class,'register']);
Route::get("/",[ProductController::class,'inicio']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartlist",[ProductController::class,'cartList']);
Route::get("removecart/{id}",[ProductController::class,'removeCart']);
Route::get("/ordernow",[ProductController::class,'orderNow']);
Route::post("/orderplace",[ProductController::class,'orderPlace'])->name('orderplace');
Route::get("/myorders",[ProductController::class,'myOrder']);
Route::get("/pdfreport",[ProductController::class,'Print'])->name('pdfreport');

/* Route::get('payment', [PayPalController::class, 'payment'])->name('payment'); */
/* Route::get('cancel', [PayPalController::class, 'cancel'])->name('payment.cancel'); */
/* Route::get('payment/success', [PayPalController::class, 'success'])->name('payment.success'); */


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
