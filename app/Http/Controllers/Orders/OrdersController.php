<?php

namespace App\Http\Controllers\Orders;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
Use Alert;


class OrdersController extends Controller
{
    public function placeOrder(Request $request)
    {
        $validatedData = $request->validate([
            'phone' => 'regex:/^(255)[0-9]{9}$/',
            'fname' => 'required',
            'lname' => 'required',
            'address' => 'required',
            'pickup_time' => 'required',
            'email' => 'required|email',
            'cloth_count' => 'required|digits_between:1,2',
            // 'house' => 'digits_between:1,2',
        ]);

        $place_order = new Order;
        $place_order->fname = $request->fname;
        $place_order->lname = $request->lname;
        $place_order->email = $request->email;
        $place_order->phone = $request->phone;
        $place_order->address = $request->address;
        $place_order->address2 = $request->address2;
        $place_order->house = $request->house;
        $place_order->pickup_time = $request->pickup_time;
        $place_order->info = $request->info;
        $place_order->cloth_count = $request->cloth_count;

        $place_order->save();

        $id = Order::orderByDesc('created_at')->where('email', $request->email)->first();
        return response()->json(['success'=>'Order is successfully submitted!, your order ID is '. $id->id]);
    }

    public function order()
    {
        $orders = Order::orderByDesc('id')->get();
        return view('dashboard', compact('orders'));
    }


    public function orderCheck()
    {
        return view('checkOrder');
    }

    public function getOrderId(Request $request)
    {
       $validatedData = $request->validate([
            'email'=> 'required|email'
        ]);

        try {
            $getId = Order::orderByDesc('created_at')->where('email', $request->email)->first();
            Alert::success('Your order ID is ', $getId->id);

        }
        catch (\Exception $e) {
            Alert::error('Your email do not match with our records');
        }

        return \redirect()->back();

    }

    public function confirmPickup(Request $request){

        $request->validate([
            'id'=> 'required'
        ]);
        try {   
            $getStatus = Order::where('id', $request->id)->first();
            $getStatus->pickup_status = 'yes';
            $getStatus->save();
            
            return redirect()->back()->with('toast_success', 'Thanks for confirmation');
        } catch (\Exception $e) {
            return \redirect()->back()->with('errors', 'Your orderID is invalid');
        }
    }
}
