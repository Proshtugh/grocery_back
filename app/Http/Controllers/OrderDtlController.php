<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\OrderDtl;
use App\Http\Controllers\BaseController as BaseController;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\OrderDtl as OrderDtlResource;

class OrderDtlController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = OrderDtl::all();
        return $this->sendResponse(OrderDtlResource::collection($orders), 'Products fetched.');
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
			'orderId' => 'required',
			'productId' => 'required',
			'quantity' => 'required',
			'price' => 'required',		
        ]);
		
        if($validator->fails()){
            return $this->sendError($validator->errors());       
        }
        
		$orders = OrderDtl::create($input);
        return $this->sendResponse(new OrderDtlResource($orders), 'Created.');		
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$orders = DB::select('
		SELECT products.*, order_dtls.quantity, order_dtls.price
		FROM order_dtls
		INNER JOIN
		(products)
		ON(order_dtls.productId = products.id)
		WHERE orderId='.$id);
		
		if (is_null($orders)) {
            return $this->sendError('Order does not exist.');
        }
        return $this->sendResponse($orders, 'Order fetched.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderDtl $order)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderDtl $order)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order2 = OrderDtl::find($id);
        $order2->delete();
        return $this->sendResponse([], 'Product deleted.');
    }
}
