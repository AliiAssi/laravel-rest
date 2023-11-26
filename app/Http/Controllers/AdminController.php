<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Use the correct case
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Chefs;
use App\Models\Order;

class AdminController extends Controller
{
    public function users(){
        $data = User::all(); // Correct case for the model class
        return view('admin.users', compact('data'));
    }
    public function deleteuser($id){
        $data = User::find($id); // Correct case for the model class
        $data->delete();
        return redirect()->back();
    }
    public function foodmenu(){
        $food = Food::all(); // Corrected class name capitalization

        return view('admin.foodmenu' ,compact('food'));
    }
    public function uploadfood(Request $request){
        $title = $request->title;
        $image = $request->image;
        $price = $request->price;
        $desc = $request->description;
        #for the image
        $imagename = time().'.'.$image->getClientOriginalExtension();
        #new_food
        $new_food = new food;
        $new_food->title = $title;
        $new_food->description = $desc;
        $new_food->price = $price;
        $new_food->image = $imagename;
        $request->image->move('foodimage',$imagename);
        $new_food->save();
        return redirect()->back();
    }
    public function deletefood($id){
        Food::find($id)->delete();
        return redirect()->back();
    }
    public function updateview($id){
        $food = Food::find($id);
        return view('admin.showupdatingfood',compact('food'));
    }
    public function update(Request $request,$id){
        $food = Food::find($id);
        $food->title = $request->title;
        $food->description = $request->description;
        $food->price = $request->price;
        if(isset($request->image)){
            $imagename = time().'.'.$request->image->getClientOriginalExtension();
            $food->image = $imagename;
            $request->image->move('foodimage',$imagename);   
            }
        $food->save();
        return redirect('foodmenu');
    }
    public function makeReservation(Request $request){
        $name = $request->name;
        $email = $request->email;
        $nb_of_guests = $request->numberguests;
        $time = $request->time;
        $message = $request->message;
        $phone = $request->phone;

        $res = new Reservation;
        $res->name = $name;
        $res->email = $email;
        $res->guestNumber = $nb_of_guests;
        $res->time = $time;
        $res->message = $message;
        $res->phone = $phone;
        $res->date = $request->date;
        $res->save();
        return redirect()->back();          
    }
    public function reservationView(){
        $res = Reservation::all();
        return view('admin.viewReservation',compact('res'));
    }
    public function deleteReservation($id)
    {
        Reservation::find($id)->delete();
        return redirect()->back();
    }
    public function adminChefs(){
        $chefs = Chefs::all();
        return view('admin.chefs',compact('chefs'));
    }
    public function uploadchef(Request $request)
    {
        $chef = new Chefs;

        $imagename = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move('chefsimage',$imagename);


        $chef->name = $request->name;
        $chef->info = $request->info;
        $chef->image = $imagename;
        $chef->save();
        return redirect()->back();

    }
    public function deleteChef($id){
        $chef = Chefs::find($id);
        $chef->delete();
        return redirect()->back();
    }
    public function updateViewChef($id){
        $chef = Chefs::find($id);
        return view('admin.showChef',compact('chef'));
    }
    public function saveChef(Request $request,    $id){
        $chef = Chefs::find($id);

        $chef->name = $request->name;
        $chef->info = $request->info;
        if(isset($request->image))
        {
            $imagename = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move('chefsimage',$imagename);
            $chef->image = $request->image;
        }
        $chef->save();
        return redirect()->back();
    }
    public function new_orders(){
        $orders  = Order::where('status','')
        ->join('users','users.id','=','orders.user_id')
        ->select('*','orders.id AS ordery')
        ->get();
        ;
        return view('admin.new_orders',compact('orders'));
    }
    public function pending_orders(){
        $orders  = Order::where('status','pending')
        ->join('users','users.id','=','orders.user_id')
        ->select('*','orders.id AS ordery')
        ->get();
        ;
        return view('admin.pending_orders',compact('orders'));
    }
    public function complete_order($id){
        $order = Order::find($id);
        $order->status = 'complete';
        $order->save();
        return redirect()->back();
    }
    public function delete_order($id){
        Order::find($id)->delete();
        return redirect()->back();
    }
    public function pend_order($id){
        $order = Order::find($id);
        $order->status = 'pending';
        $order->save();
        return redirect()->back();
    }
    public function history(){
        $totale_profit = 0 ;
        $all = Order::where('status','complete')
        ->join('users','users.id','=','orders.user_id')
        ->select('*','orders.id AS ordery')->get();
        foreach($all as $order)
        {
            $totale_profit += $order->order_totale;
        }
        return view('admin.history',compact('all','totale_profit'));
    }
}
 