<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
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
            'product_id' => new ProductResource($this->product),
            'number' => $this->number,
            'amount' => $this->amount,
            'shopping_fee' => $this->shopping_fee,
            'total' => $this->amount + $this->shopping_fee,
            'order_date' => $this->order_date,
            'order_time' => $this->order_time,
        ];
    }
}
