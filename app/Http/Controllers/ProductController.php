<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\BaseController as BaseController;
use Validator;
use App\Http\Resources\Product as ProductResource;

class ProductController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$products = Product::all();
        return $this->sendResponse(ProductResource::collection($products), 'Products fetched.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'name' => 'required',
			'size' => 'required',
			'category' => 'required',
			'price' => 'required',
			'discount' => 'required',
			'description' => 'required',
			'brand' => 'required',
			'stock' => 'required',
        ]);
		
        if($validator->fails()){
            return $this->sendError($validator->errors());       
        }
        
		$products = Product::create($input);
        return $this->sendResponse(new ProductResource($products), 'Created.');		
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
		$products = Product::find($id);
        if (is_null($products)) {
            return $this->sendError('Product does not exist.');
        }
        return $this->sendResponse(new ProductResource($products), 'Product fetched.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $input = $request->all();

        $validator = Validator::make($input, [
            'name' => 'required',
			'size' => 'required',
			'category' => 'required',
			'price' => 'required',
			'discount' => 'required',
			'description' => 'required',
			'brand' => 'required',
			'stock' => 'required',
        ]);

        if($validator->fails()){
            return $this->sendError($validator->errors());       
        }
		
		$product2 = Product::find($request->id);
		
        $product2->name = $input['name'];
		$product2->size = $input['size'];
		$product2->category = $input['category'];
		$product2->price = $input['price'];
		$product2->discount = $input['discount'];
		$product2->description = $input['description'];
		$product2->brand = $input['brand'];
		$product2->stock = $input['stock'];
        $product2->save();
        
        return $this->sendResponse(new ProductResource($product2), 'Post updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		$product2 = Product::find($id);
        $product2->delete();
        return $this->sendResponse([], 'Product deleted.');
    }
}
