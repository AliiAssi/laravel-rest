<?php

namespace App\Http\Controllers;


use App\Models\Cart;
use App\Models\User;
use App\Models\Adress;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function show()
    {
        $cart_items = Cart::where('carts.user_id',Auth::id())
        ->join('food','carts.item_id','=','food.id')
        ->join('adresses','adresses.user_id','=','carts.user_id')
        ->select('*')
        ->get();
        $count = Cart::where('user_id',Auth::id())->count();

        $adress = Adress::where('user_id',Auth::id())->get()->first();
        $users_info = User::find(Auth::id());

        
        return view('checkout',compact('cart_items','count','adress','users_info'));
    }
    public function make_order(){
        $user_products = '';
        $check_cart = Cart::where('carts.user_id',Auth::id())
        ->join('food','carts.item_id','=','food.id')
        ->select('*')->get();
        $totale = 0;
        foreach($check_cart as $product){
            $totale += $product->qty * $product->price;
            $user_products .= "(".$product->title."-".$product->price."-".$product->qty.")+";
        }
        $user_products = substr($user_products,0,-1);
        $order = new Order;
        $order->user_id = Auth::id();
        $order->user_products = $user_products;
        $order->order_totale = $totale;
        $order->status = '';
        $adress =Adress::where('user_id',Auth::id())->select('*')->get()->first();

        $order->adress = $adress->country." , ".$adress->city." , ".$adress->area; 
        $order->save();

        Cart::where('user_id',Auth::id())->delete();

        $orders = Order::where('user_id',Auth::id())->select('*')->get();



        return redirect('tracker');
    }
    public function tracker_view(){
        $orders = Order::where('user_id',Auth::id())->select('*')->get();
        return view('tracker',compact('orders'));
    }
    public function status($id){
        $order = Order::find($id);
        $in = true;
        return view('status',compact('order','in'));
    }
   
}
