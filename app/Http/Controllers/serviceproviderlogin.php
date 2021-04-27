<?php

namespace App\Http\Controllers;

use App\dreamwaver_booking;
use Illuminate\Http\Request;
use App\serviceproviderregister;


class serviceproviderlogin extends Controller
{

    function index(Request $request)
    {
        $email = $request->spemail;
        $password = $request->sppassword;
        $user = serviceproviderregister::where('email', $email)->where('password', $password)->first();
        //$user =auth()->user();

        if($user)
        {
            $orders=dreamwaver_booking::where('service_provider_name',$user->name)->get();
//            return view('layouts/serviceProviderDashboard')->with(['order' => $orders]);
            return view('layouts/serviceProviderDashboard', compact('user', 'orders'));
        }
        else
            return "no account";
   }

    public function approveOrder($order_id)
    {
        //$user =auth()->user();
        $order = dreamwaver_booking::findOrFail($order_id);
        $order->status = 'approved';
        $order->save();
       //return redirect('serviceProviderDashboard');
        return "Approved";

    }
    public function rejectOrder($order_id)
    {
       // $user =auth()->user();
        //$orders=dreamwaver_booking::where('service_provider_name',$user->name)->get();
        $order = dreamwaver_booking::findOrFail($order_id);
        $order->status = 'rejected';
        $order->save();
        //return redirect()->route('serviceProviderDashboard')->with('orders',$order);
        return "Rejected";
    }


}
