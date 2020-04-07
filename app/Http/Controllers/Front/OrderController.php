<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\Prescription;
use Illuminate\Http\Request;
use Image;
use Storage;

class OrderController extends Controller
{
    protected $orders;
    public function __construct(Order $orders)
    {
        $this->orders = $orders;
    }

    public function index()
    {
        return view('front.order.index');
    }
    public function store(OrderRequest $request)
    {
    	$data = new Order();
        $data->name     = $request->name;
        $data->address  = $request->address;
        $data->phone    = $request->phone;
        $data->status   = 1;
        if ($data->save()) {
            if ($request->has('prescription')) {
                foreach ($request->prescription as $key => $value) {
                    $pre = new Prescription();
                    $pre->order_id = $data->id;
                    $pre->description = $value['description'];

                    $file               = $value['image'];
                    $name               = $file->getClientOriginalName();
                    $name_part          = explode('.', $name);
                    $filename           = $name_part[0]; 
                    $filename           = str_replace(' ', '-', $filename);
                    $extension          = $file->getClientOriginalExtension();
                    $new_name           = $filename.time().'.'.$extension;
                    $image              = Image::make($file)->encode('jpg');
                    Storage::disk('prescription_image')->put($new_name,$image);

                    $pre->prescription_image = $new_name;
                    $pre->save(); 
                }
                return redirect()->route('frontend.order.order-completed');
            }
            $revert = Order::find($data->id)->delete();
            return redirect()->back();
        }
    }

    public function orderCompleted()
    {
    	return view('front.order.order-completed');
    }
}
