<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        return view('front.order.index');
    }
    public function store(Request $request)
    {
        dd($request->all());
        $data = [];
    	if ($request->prescription) {
            $prescriptions = $request->prescription;
            foreach($prescriptions as $pres) {
                $tempData['description'] =  $pres['description'];
                if ($pres['image']) {
                    $name = Str::random(10) . time().'.'.$pres['image']->extension();
                    $pres['image']->move(public_path().'/upload/prescriptions/', $name);
                    $tempData['image'] = $name;
                }
                array_push($data, $tempData);
            }
        }

        DB::transaction(function () use($request, $data) {
            $order = Order::create([
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address,
            ]);
            if (!empty($data)) {
                $order->prescriptions()->create($data);
            }
        });

    }

    public function orderCompleted()
    {
    	return view('front.order.order-completed');
    }
}
