<?php

namespace App\Http\Controllers;

use App\dreamwaver_booking;
use Illuminate\Http\Request;
use App\User;

class customerBookingDashboard extends Controller
{
    function index()
    {
        $user =auth()->user();

        $email = $user->email;
        $password = $user->password;
        $user = User::where('email', $email)->where('password', $password)->first();
        $orders=dreamwaver_booking::where('email',$user->email)->get();
        return view('layouts/cart')-> with("orders",$orders);
    }
}
