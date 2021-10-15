<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Notification;
use App\Product;
use App\Order;
use App\Me;
use App\OrderDetailes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cart=Cart::where('customer_id' ,  1)->get();
        //$total_price=Cart::where('customer_id' ,  Auth::id())->sum('total_price');
        return view ('layouts.table',compact('cart'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cart.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     //return $request;
        $product = Product::find($request->product_id);

        $cart = Cart::where('product_id' , $request->product_id)->where('customer_id' , 1)->first();
        if($cart ==null){
            $cart=NEW Cart;
            $cart->product_id=$request->product_id;
            $cart->customer_id=1;
            $cart->Quantity=$request->Quantity;
            $cart->price=$product->price;
            $cart->total_price=$request->Quantity * $product->price;
            $cart->save();
        }else{
            $cart->Quantity+= $request->Quantity;
            $cart->total_price= $cart->Quantity * $product->price;
            $cart->save();
        }
//        $cart = Cart::all();
//        return view ('layouts.table',compact('cart'));
            return redirect()->back();
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
//        $cart= Cart::findOrFail($id);
//        return view('cart.view_one',compact('cart'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cart =Cart::findOrFail($id);
        return view('cart.edit',compact('cart'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
//        $cart= Cart::findOrFail($id);
//        $cart=NEW Cart;
//        $cart->product_id=$request->product_id;
//        $cart->customer_id=auth()->id();
//        $cart->Quantity=$request->Quantity;
//        $cart->price=$request->price;
//        $cart->total_price=$request->total_price;
//        $cart->product_id->sum('price');
//
//
//        $cart->save();
//        return redirect('/cart');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart= Cart::findOrFail($id);
        $cart->delete();
        return redirect('/cart');
    }

    public function checkout(Request $request){
        $total_price=Cart::where('customer_id' , auth()->id())->sum('total_price');
        $data = Cart::where('customer_id' , auth()->id())->get();
        $order = Order::create([
            "customer_id"=>auth()->id(), "address"=>$request->address, "total_price"=>$total_price
        ]);

        foreach($data as $p){
            OrderDetailes::create([
                "product_id" => $p->product->id,
                "order_id" => $order->id, "Quantity" => $p->Quantity,
                "price"=> $p->price, "total_price"=> $p->total_price
            ]);
            Notification::create([
                "title"=>"منتج جديد",
                "text"=>$p->Quantity,
                "notifier_id"=>$p->product->vendor_id,
                "is_seen"=>"0",
                "note_type"=>'product',
            ]);
            Me::create([

                "product_id" => $p->product->id,
                "ourcomes"=>$p->total_price*.01,


            ]);

        }
        Cart::where('customer_id' , auth()->id())->delete();

        return redirect('/');

    }
}
