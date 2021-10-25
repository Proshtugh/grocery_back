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
	
	public function categorylist_3()
    {
		/*
		$products = Product::where('category',$id)->get();
		*/
		
		$products = DB::table('categories')->take(3)->get();
		
		/*
		$products = DB::table('products')->join('file_uploads','products.id','=','file_uploads.productId')
		->select('products.id','products.name','file_uploads.filename')->where('category',$id)->get();		
        */
        return $products;
    }
	
	public function categorylist_6()
    {
		/*
		$products = Product::where('category',$id)->get();
		*/
		
		$products = DB::table('categories')->skip(3)->take(3)->get();
		
		/*
		$products = DB::table('products')->join('file_uploads','products.id','=','file_uploads.productId')
		->select('products.id','products.name','file_uploads.filename')->where('category',$id)->get();		
        */
        return $products;
    }
	
	public function categorylist_9()
    {
		/*
		$products = Product::where('category',$id)->get();
		*/
		
		$products = DB::table('categories')->skip(6)->take(3)->get();
		
		/*
		$products = DB::table('products')->join('file_uploads','products.id','=','file_uploads.productId')
		->select('products.id','products.name','file_uploads.filename')->where('category',$id)->get();		
        */
        return $products;
    }
	
	public function categorylist_12()
    {
		/*
		$products = Product::where('category',$id)->get();
		*/
		
		$products = DB::table('categories')->skip(9)->take(3)->get();
		
		/*
		$products = DB::table('products')->join('file_uploads','products.id','=','file_uploads.productId')
		->select('products.id','products.name','file_uploads.filename')->where('category',$id)->get();		
        */
        return $products;
    }
	
	public function categorylist_15()
    {
		/*
		$products = Product::where('category',$id)->get();
		*/
		
		$products = DB::table('categories')->skip(12)->take(3)->get();
		
		/*
		$products = DB::table('products')->join('file_uploads','products.id','=','file_uploads.productId')
		->select('products.id','products.name','file_uploads.filename')->where('category',$id)->get();		
        */
        return $products;
    }
	
	public function categorylist_18()
    {
		/*
		$products = Product::where('category',$id)->get();
		*/
		
		$products = DB::table('categories')->skip(15)->take(3)->get();
		
		/*
		$products = DB::table('products')->join('file_uploads','products.id','=','file_uploads.productId')
		->select('products.id','products.name','file_uploads.filename')->where('category',$id)->get();		
        */
        return $products;
    }
	
	public function categorylist_21()
    {
		/*
		$products = Product::where('category',$id)->get();
		*/
		
		$products = DB::table('categories')->skip(18)->take(3)->get();
		
		/*
		$products = DB::table('products')->join('file_uploads','products.id','=','file_uploads.productId')
		->select('products.id','products.name','file_uploads.filename')->where('category',$id)->get();		
        */
        return $products;
    }
	
	public function categorylist_24()
    {
		/*
		$products = Product::where('category',$id)->get();
		*/
		
		$products = DB::table('categories')->skip(21)->take(3)->get();
		
		/*
		$products = DB::table('products')->join('file_uploads','products.id','=','file_uploads.productId')
		->select('products.id','products.name','file_uploads.filename')->where('category',$id)->get();		
        */
        return $products;
    }
	
	public function categorylist_27()
    {
		/*
		$products = Product::where('category',$id)->get();
		*/
		
		$products = DB::table('categories')->skip(24)->take(3)->get();
		
		/*
		$products = DB::table('products')->join('file_uploads','products.id','=','file_uploads.productId')
		->select('products.id','products.name','file_uploads.filename')->where('category',$id)->get();		
        */
        return $products;
    }
	
	public function categorylist_30()
    {
		/*
		$products = Product::where('category',$id)->get();
		*/
		
		$products = DB::table('categories')->skip(27)->take(3)->get();
		
		/*
		$products = DB::table('products')->join('file_uploads','products.id','=','file_uploads.productId')
		->select('products.id','products.name','file_uploads.filename')->where('category',$id)->get();		
        */
        return $products;
    }	
	
	public function productlist_8()
    {
		/*
		$products = Product::where('category',$id)->get();
		*/
		
		$products = DB::table('products')->take(8)->get();
		
		/*
		$products = DB::table('products')->join('file_uploads','products.id','=','file_uploads.productId')
		->select('products.id','products.name','file_uploads.filename')->where('category',$id)->get();		
        */
        return $products;
    }
	
	public function productAll()
    {
		/*
		$products = Product::where('category',$id)->get();
		*/
		
		$products = DB::table('products')->select('id','name','size','price','discount','brand','stock',DB::raw('0 as qty'))
		->get();
		
		/*
		$products = DB::table('products')->join('file_uploads','products.id','=','file_uploads.productId')
		->select('products.id','products.name','file_uploads.filename')->where('category',$id)->get();		
        */
        return $products;
    }
}
