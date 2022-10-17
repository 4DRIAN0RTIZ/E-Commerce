<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
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
        if ($req->user_id = Auth::id()) {
            $cart = new Cart;
            $cart->user_id = $req->user_id = Auth::id();
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }
    static function cartItem()
    {
        $userId = Auth::id();
        return Cart::where('user_id', $userId)->count();
    }

    function cartList()
    {
        $userId = Auth::id();
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
        $userId = Auth::id();
        $total = $data = DB::table('cart')
            ->join('products', 'cart.product_id', 'products.id')
            ->where('cart.user_id', $userId)
            ->sum('products.price');

        return view('ordernow', ['total' => $total]);
    }
    function orderPlace(Request $req)
    {

        $req->validate([
            'address' => ['required'],
            'payment' => ['required']
        ]);

        $userId = Auth::id();
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
        if (Auth::check()) {
            $userId = Auth::user()->id;
            $orders = DB::table('orders')
                ->join('products', 'orders.product_id', 'products.id')
                ->where('orders.user_id', $userId)
                ->get();
        } else {
            return redirect('/login');
        }

        return view('myorders', ['orders' => $orders]);
    }

    public function Print()
    {
            $userId = Auth::user()->id;
            $orders = DB::table('orders')
                ->join('products', 'orders.product_id', 'products.id')
                ->where('orders.user_id', $userId)
                ->get();
            $pdf = PDF::loadView('pdfreport', compact('orders'));
            return $pdf->stream();

    }
}
