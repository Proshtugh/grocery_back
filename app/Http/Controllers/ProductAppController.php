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
		$products = DB::select('
		SELECT products.id,products.name,products.size,products.price,products.discount,products.brand,products.stock,0 as qty
		FROM products
		WHERE category="'.$id.'"');		
		
		/*
		$products = DB::table('products')->join('file_uploads','products.id','=','file_uploads.productId')
		->select('products.id','products.name','file_uploads.filename')->where('category',$id)->get();		
        */
        return $products;
    }
}
