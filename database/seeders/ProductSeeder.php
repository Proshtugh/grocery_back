<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 1,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 1,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 2,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 3,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 1,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 2,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 3,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 1,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 1,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 2,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 3,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 1,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 2,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 3,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 1,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 1,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 2,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 3,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 1,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 2,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 3,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 1,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 1,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 2,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 3,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 1,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 2,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 3,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 1,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 1,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 2,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 3,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 1,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 2,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 3,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 1,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 1,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 2,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 3,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 1,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 2,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 3,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 1,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 1,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 2,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 3,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 1,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 2,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ],
		[
            'name' => Str::random(10),
			'size' => Str::random(10),
			'category' => 3,
			'price' => 11.99,
			'discount' => 0,
			'description' => Str::random(50),
			'brand' => Str::random(30),
			'stock' => 30
        ]);
    }
}
