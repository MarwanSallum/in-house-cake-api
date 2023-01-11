<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'category' => new CategoryResource($this->whenLoaded('category')),
            'branch' => new BranchResource($this->whenLoaded('branch')),
            'name'=> $this->name,
            'description' => $this->description,
            'image' => $this->getFirstMedia('products')->getFullUrl(),
            'price' => $this->price,
            'status' => $this->status,
            'discount' => DiscountResource::collection($this->discounts)
        ];
    }
}
