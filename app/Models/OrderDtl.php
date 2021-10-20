<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDtl extends Model
{
    protected $fillable = [
		'orderId',
		'productId',
		'quantity',
		'price',
	];
}
