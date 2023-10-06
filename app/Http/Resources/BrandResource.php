<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BrandResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        return [
            'id'=>$this->id,
            'Brand_name'=>$this->Brand_name,
            'Product_name'=>$this->Product_name,
            'Price'=>$this->Price,
            'Quantity'=>$this->Price,
            'price_with_currency'=>$this->Price ."BDT"
        ];
    }
}
