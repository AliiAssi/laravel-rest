<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food; // Corrected namespace and class name
use App\Models\Chefs; // Corrected namespace and class name
use App\Models\Cart; // Corrected namespace and class name
use App\Models\Adress; // Corrected namespace and class name
use App\Models\Order; // Corrected namespace and class name
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index()
    {
        $food = Food::all(); // Corrected class name capitalization
        $chefs = Chefs::all();
        return view('home', compact('food',"chefs"));
    }

    public function redirects()
    {
        $usertype = Auth::user()->usertype;
        if ($usertype == 1) {
       


            return view('admin.home');
        } else {
            $food = Food::all(); // Corrected class name capitalization
            $chefs = Chefs::all();
            $count = Cart::where('user_id',Auth::id())->count();
            return view('home', compact('food','chefs','count'));
        }
    }
    public function put_adress(Request $request){
        $check_adress = Adress::where('user_id', Auth::id())->select('*')->get()->first();
        if($check_adress)
        {
            $check_adress->country = $request->country;
            $check_adress->city = $request->city;
            $check_adress->area = $request->area;
            $check_adress->save();
            return redirect()->back();
        }
        else{
            $new_adress = new Adress;
            $new_adress->user_id = Auth::id();
            $new_adress->country = $request->country;
            $new_adress->city = $request->city;
            $new_adress->area = $request->area;
            $new_adress->save();
            return redirect()->back();
        }
    }
    public function adress(){
        $adress  = Adress::where('user_id', Auth::id())->select('*')->get()->first();
        if ($adress) {
            // The query returned a result, so you can safely access properties
            $country = $adress->country;
            $city = $adress->city;
            $area = $adress->area;
        } else {
            // Handle the case where no address was found
            $country = ''; // or set it to some default value
            $area = ''; // or set it to some default value
            $city = ''; // or set it to some default value
        }
        return view('adress',compact('country','city','area'));
    }
}
