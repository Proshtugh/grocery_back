<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Validator;
use App\Http\Resources\ProductAppResource;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BaseController as BaseController;

class ProductAppController extends BaseController
{
    public function productlist($id)
    {
		/*
		$products = Product::where('category',$id)->get();
		*/
		
		$products = DB::table('products')->select('id','name','size','price','discount','brand','stock',DB::raw('0 as qty'))
		->where('category',$id)->get();
		
		/*
		$products = DB::table('products')->join('file_uploads','products.id','=','file_uploads.productId')
		->select('products.id','products.name','file_uploads.filename')->where('category',$id)->get();		
        */
        return $products;
    }
	
	public function categorylist_4($id)
    {
		/*
		$products = Product::where('category',$id)->get();
		*/
		
		$products = DB::table('categories')->take(2)->get();
		
		/*
		$products = DB::table('products')->join('file_uploads','products.id','=','file_uploads.productId')
		->select('products.id','products.name','file_uploads.filename')->where('category',$id)->get();		
        */
        return $products;
    }
}
