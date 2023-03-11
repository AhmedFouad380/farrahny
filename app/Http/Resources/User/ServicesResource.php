<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;

class ServicesResource extends JsonResource
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
            'title'=>$this->title,
            'image'=>$this->image,
            'price'=>$this->price,
            'deposit'=>$this->deposit,
            'rate'=>$this->rate,
            'category'=>$this->Category->title,
            'event'=>$this->Event->title,
        ];
    }
}
