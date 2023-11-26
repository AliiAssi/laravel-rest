<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function cart()
    {
        $items = Cart::where('user_id', Auth::id())
            ->join('food', 'carts.item_id', '=', 'food.id')
            ->select('carts.*', 'food.title', 'food.price')
            ->get();

        return view('cart', compact('items'));

    }
    public function minus_qty($id){
        $item = Cart::find($id);
        if($item->qty > 1)
        {
            $item->qty -= 1;
            $item->save();
        }
        return redirect()->back();
    }
    public function add_qty($id){
        $item = Cart::find($id);
        $item->qty += 1;
        $item->save();
        return redirect()->back();
    }
    public function delete_item($id){
        $item = Cart::find($id);
        $item->delete();
        return redirect()->back();
    }
    public function addtocart(Request $request, $id)
    {
        try {
            // Get the user ID of the logged-in user
            $user_id = Auth::id();

            // Get the item ID from the URL parameter
            $item_id = $id;
            if($this->check_item_id($item_id))
            {
                Session::flash('no', 'Item added  to the cart already');

                // Redirect to a success page or return a response
                return redirect()->back();   
            }

            // Get the quantity from the request
            $qty = $request->input('number');

            // Create a new Cart model instance
            $cart = new Cart;

            // Set the user ID, item ID, and quantity
            $cart->user_id = $user_id;
            $cart->item_id = $item_id;
            $cart->qty = $qty;

            // Save the cart item to the database
            $cart->save();

            // Put a success message into the session
            Session::flash('success', 'Item added to the cart successfully');
            Session::flash('section', 'menu'); // Set the target section ID ('menu' in this case)

            // Redirect to a success page or return a response
            return redirect()->back();
        } catch (\Exception $e) {
            // Handle any exceptions that occur during the process
            return 'Error: ' . $e->getMessage();
        }
    }
    public function check_item_id($id)
    {
        $cart = Cart::where('item_id', $id)
        ->where('user_id', Auth::id())
        ->first();

        return isset($cart);

    }
}
