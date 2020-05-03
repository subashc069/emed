<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Repositories\OrderRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class OrderController extends ApiController
{
    protected $orders;
    public function __construct(OrderRepositoryInterface $orders)
    {
        $this->orders = $orders;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = $this->orders->all();
        return $orders;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OrderRequest $request)
    {
        try {
            $request->validated();

            Log::info($request->all());
            $data = [];
            $data['description'] =  $request->description;
            if ($request->has('image') && $request->hasFile('image')) {
                $name = Str::random(10) . time() . '.' . $request->image->extension();
                $request->image->move(public_path() . '/upload/prescriptions/', $name);
                $data['image'] = $name;
            }

            DB::transaction(function () use ($request, $data) {
                $order = Order::create([
                    'name' => $request->name,
                    'phone' => $request->phone,
                    'address' => $request->address,
                    'token' => $request->token,
                ]);
                if (!empty($data)) {
                    $order->prescriptions()->create($data);
                }
            });
            return $this->okResponse([
                'errors' => false,
                'message' => 'Order placed successfully!'
            ]);
        } catch (\Exception $ex) {
            Log::info($ex->getMessage());
            return $this->okResponse([
                'errors' => true,
                'message' => 'Order placed failed!'
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
