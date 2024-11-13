<?php

namespace App\Http\Controllers;
use modules\Users\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }


    public function index(){


//        $order = Order::with('products')->where('customer_id', auth()->user()->id)->where('status', 0)->get();

//        return view('home', compact( 'order',));
        return view('home');
//        return view('home', compact( 'order'));
    }


}
