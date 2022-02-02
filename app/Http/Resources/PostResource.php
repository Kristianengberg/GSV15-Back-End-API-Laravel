<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            'user' => $this->user,
            'uuid' => $this->uuid,
            'slug' => $this->slug,
            'body' => $this->body,
            'time' => $this->created_at->diffForHumans()
        ];
    }
}
