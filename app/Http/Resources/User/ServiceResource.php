<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;

class ServiceResource extends JsonResource
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
            'description'=>$this->description,
            'image'=>$this->image,
            'price'=>$this->price,
            'deposit'=>$this->deposit,
            'rate'=>$this->rate,
            'category'=>$this->Category->title,
            'event'=>$this->Event->title,
            'images'=>ServiceImagesResource::collection($this->images),
            'video'=>(string)$this->video,
            'video_type'=>(string)$this->video_type,
            'video_file'=>(string)$this->video_file,
            'is_favorite'=>$this->is_favorite,
            'provider'=>ProvidersResource::make($this->provider),
        ];

    }
}
