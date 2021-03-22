<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Orders;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $order = Orders::all();
        // $collection = collect($order);  
        // return view('home', ['order' => $order]);
        return view('home');
        
    }
}
