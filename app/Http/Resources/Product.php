<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Product extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
			'size' => $this->size,
			'category' => $this->category,
			'price' => $this->price,
			'discount' => $this->discount,
			'description' => $this->description,
			'brand' => $this->brand,
			'stock' => $this->stock,
        ];		
    }
}
