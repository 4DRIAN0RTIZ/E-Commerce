<?php

namespace App\Http\Controllers;

use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function inicio(){
        return view('home')->with('products',Product::all());
    }
    function index()
    {
        return view('productindex')->with('products', Product::all());
    }

    public function create(){
        return view('productcreatecopy');
    }

public function store(Request $req)
    {
        $product = new Product();


        $product->name = $req->name;
        $product->description = $req->description;
        $product->category = $req->category;
        $product->price = $req->price;
        if ($req->hasfile('gallery')) {
            $imagen         = $req->file('gallery');
            $nombreimagen   = Str::slug($req->id . '_' . $req->name . '_' . $req->category) . "." . $imagen->guessExtension();
            //$nombreimagen = $imagen->getClientOriginalName();
            $ruta           = public_path("img/product/");
            $imagen->move($ruta, $nombreimagen);

            $product->gallery = $nombreimagen;
        } else {
            $product->gallery = $req->imagenactual;
        }

        $product->save();

        return view('productindex')->with('products', Product::all())->with('mensaje', "Producto Añadido");
}
    public function show($id)
    {
        $product = Product::find($id);
        return view('productshow')->with('product', $product);
    }

     public function edit($id)
    {
        $product = Product::find($id);
        return view('productedit')->with('product', $product);
    }

    public function update(Request $req, $id)
    {
        $product = Product::find($id);

        $product->name = $req->name;
        $product->description = $req->description;
        $product->category = $req->category;
        $product->price = $req->price;
        if ($req->hasfile('gallery')) {
            $imagen         = $req->file('gallery');
            $nombreimagen   = Str::slug($req->id . '_' . $req->name . '_' . $req->category) . "." . $imagen->guessExtension();
            //$nombreimagen = $imagen->getClientOriginalName();
            $ruta           = public_path("img/product/");
            $imagen->move($ruta, $nombreimagen);

            $product->gallery = $nombreimagen;
        } else {
            $product->gallery = $req->imagenactual;
        }

        $product->save();

        return view('productindex')->with('products', Product::all())->with('mensaje', "Producto Actualizado");
    }
    public function destroy($id)
    {
        Product::destroy($id);
        return view('productindex')->with('products', Product::all())->with('mensaje', "Producto Eliminado");
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
            return redirect('/home');
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
            $order = new Order();
            $order->user_id = $userId;
            $order->payment_method = $req->payment;
            $order->payment_status = "Pendiente";
            $order->address = $req->address;
            $order->save();
            $allCart = DB::table('cart')
                ->join('products', 'cart.product_id', 'products.id')
                ->where('cart.user_id', $userId)
                ->get();

        $OrderId = $order->id;
            foreach ($allCart as $cart) {
            $OrderDetail = new OrderDetail();
            $OrderDetail->order_id = $OrderId;
            $OrderDetail->product_id = $cart->product_id;
            $OrderDetail->price = $cart->price;
            $OrderDetail->import = $cart->price;
            $OrderDetail->status = "Pendiente";
            $OrderDetail->payment_method = $req->payment;
            $OrderDetail->payment_status = "Pendiente";
            $OrderDetail->save();

            $allCart = Cart::where('user_id', $userId)->delete();
        }
        $req->input();
        return redirect(('/'));
    }

    function myOrder()
    {
        if (Auth::check()) {
            $userId = Auth::user()->id;
            $orders = DB::table('order_details')
                ->join('orders', 'order_details.order_id', 'orders.id')
                ->join('products', 'order_details.product_id', 'products.id')
                ->where('orders.user_id', $userId)
                ->get();
        } else {
            return redirect('/login');
        }

        return view('myorders', ['order' => $orders]);
    }

    public function Print()
    {
        $date = Carbon::now('America/Mexico_City');
        $userMail = Auth::user()->email;
        $userName = Auth::user()->name;
        $userId = Auth::user()->id;
        $orders = DB::table('order_details')
                ->join('orders', 'order_details.order_id', 'orders.id')
                ->join('products', 'order_details.product_id', 'products.id')
                ->where('orders.user_id', $userId)
                ->get();
        $total = DB::table('order_details')
                ->join('orders', 'order_details.order_id', 'orders.id')
                ->join('products', 'order_details.product_id', 'products.id')
                ->where('orders.user_id', $userId)
                ->sum('products.price');


        /* $orders = DB::table('order_details') */
        /*     ->join('products', 'orders.product_id', 'products.id') */
        /*     ->where('order.user_id', $userId) */
        /*     ->get(); */
        /* $total = DB::table('order_details') */
        /*     ->join('products', 'orders.product_id', 'products.id') */
        /*     ->where('orders.user_id', $userId) */
        /*     ->sum('products.price'); */
        $pdf = PDF::loadView('pdfreport', compact('orders', 'total', 'date', 'userMail', 'userName'));
        return $pdf->stream();
    }
}
