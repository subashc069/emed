<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
=======
use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\Prescription;
use Illuminate\Http\Request;
use Image;
use Storage;
>>>>>>> bf1522c6d12a6b244ffdf96d1de00bba3b6c914f

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
<<<<<<< HEAD
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

=======
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
>>>>>>> bf1522c6d12a6b244ffdf96d1de00bba3b6c914f
    }

    public function orderCompleted()
    {
    	return view('front.order.order-completed');
    }
}
