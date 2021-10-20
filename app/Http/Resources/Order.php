<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Order extends JsonResource
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
			'orderDate' => $this->orderData,
			'userId' => $this->userId,
			'price' => $this->price,
			'house' => $this->house,
			'landmark' => $this->landmark,
			'floor' => $this->floor,
			'address' => $this->address,
			'status' => $this->status,
		];
        
    }
}
