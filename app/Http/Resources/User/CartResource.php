<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;

class CartResource extends JsonResource
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
            'id'=>$this->id,
            'service'=>ServicesResource::make($this->Service),
            'date'=>$this->date,
            'time'=>$this->time,
            'lng'=>(string)$this->lng,
            'lat'=>(string)$this->lat,
        ];
    }
}
