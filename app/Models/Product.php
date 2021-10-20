<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
		'name',
		'size',
		'category',
		'price',
		'discount',
		'description',
		'brand',
		'stock'
	];
}
