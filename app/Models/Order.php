<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
		'orderDate',
		'userId',
		'price',
		'landmark',
		'floor',
		'address',
		'house',
		'status'
	];
}
