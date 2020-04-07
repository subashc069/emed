<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('front.order.index');
    }
    public function store(Request $request)
    {
    	dd($request->all());
    }

    public function orderCompleted()
    {
    	return view('front.order.order-completed');
    }
}
