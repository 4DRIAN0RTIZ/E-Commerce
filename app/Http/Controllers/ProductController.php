<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function index()
    {
        $data = Product::all();
        return view('product', ['products' => $data]);
    }
    function detail($id)
    {
        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }
    function search(Request $req)
    {
        $data = Product::where('name', 'like', '%' . $req->input('query') . '%')->get();
        return view('search', ['products' => $data]);
    }
    function addToCart(Request $req)
    {
        if ($req->session()->has('user')) {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }
    static function cartItem()
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }

    function cartList()
    {
        $userId = Session::get('user')['id'];
        $data = DB::table('cart')
            ->join('products', 'cart.product_id', 'products.id')
            ->select('products.*', 'cart.id as cart_id')
            ->where('cart.user_id', $userId)
            ->get();

        return view('cartlist', ['products' => $data]);
    }

    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }

    function orderNow()
    {
        $userId = Session::get('user')['id'];
        $total = $data = DB::table('cart')
            ->join('products', 'cart.product_id', 'products.id')
            ->where('cart.user_id', $userId)
            ->sum('products.price');

        return view('ordernow', ['total' => $total]);
    }
    function orderPlace(Request $req)
    {
<<<<<<< HEAD
=======

        $req->validate([
            'address' => ['required'],
            'payment' => ['required']
        ]);

>>>>>>> f749806 (3.0ValidatedData)
        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id', $userId)->get();
        foreach ($allCart as $cart) {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = "Pendiente";
            $order->payment_method = $req->payment;
            $order->payment_status = "Pendiente";
            $order->address = $req->address;
            $order->save();

            $allCart = Cart::where('user_id', $userId)->delete();
        }
        $req->input();
        return redirect(('/'));
    }

    function myOrder()
    {
        if (session()->has('user')){
        $userId = Session::get('user')['id'];
        $orders = DB::table('orders')
            ->join('products', 'orders.product_id', 'products.id')
            ->where('orders.user_id', $userId)
            ->get();} else{
                return redirect('/login');
            }

        return view('myorders', ['orders' => $orders]);
    }
}
