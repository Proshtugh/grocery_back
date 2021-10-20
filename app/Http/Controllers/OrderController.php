<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Validator;
use Carbon\Carbon;
use App\Http\Resources\Order as OrderResource;

class OrderController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
		$user = $request->user();
        $orders = Order::where('userId', '=', $user->id)->get();
        return $this->sendResponse(OrderResource::collection($orders), 'Products fetched.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
			'house' => 'required',
			'floor' => 'required',
			'address' => 'required',
			'landmark' => 'required',
			'price' => 'required',			
        ]);
		
        if($validator->fails()){
            return $this->sendError($validator->errors());       
        }
		
		$user = $request->user();
		
		$order = new Order;
		
		$order->userId = $user->id;
		$order->orderDate = Carbon::now()->toDateTimeString();
		$order->price = $input['price'];
        $order->house = $input['house'];
		$order->landmark = $input['landmark'];
		$order->floor = $input['floor'];
        $order->address = $input['address'];
		$order->status = "Placed";
		
		$order->save();
        
		return $this->sendResponse(new OrderResource($order), 'Created.');		
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders = Order::find($id);
        if (is_null($orders)) {
            return $this->sendError('Order does not exist.');
        }
        return $this->sendResponse(new OrderResource($orders), 'Order fetched.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
			'orderDate'=> 'required',
			'userId'=> 'required',
			'price'=> 'required',
			'city'=> 'required',
			'landmark'=> 'required',
			'zip'=> 'required',
			'address'=> 'required',
			'confirm' => 'required'
        ]);

        if($validator->fails()){
            return $this->sendError($validator->errors());       
        }
		
		$order2 = Order::find($request->id);
			
        $order2->orderDate = $input['orderDate'];
		$order2->userId = $input['userId'];
		$order2->price = $input['price'];
		$order2->city = $input['city'];
		$order2->landmark = $input['landmark'];
		$order2->zip = $input['zip'];
		$order2->address = $input['address'];
		$order2->confirm = $input['confirm'];
        $order2->save();
        
        return $this->sendResponse(new OrderResource($order2), 'Post updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order2 = Order::find($id);
        $order2->delete();
        return $this->sendResponse([], 'Product deleted.');
    }
}
