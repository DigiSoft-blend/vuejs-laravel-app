<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class User extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    // public function toArray($request)
    // {
    //     return [
    //     'id' => $this->id,
    //     'name' => $this->name,
    //     'email' => $this->email,
    //     'email_verified_at' => $this->email_verified_at,
    //     'created_at' => $this->created_at->format('d/m/Y'),
    //     'updated_at' => $this->updated_at->format('d/m/Y'),
    //     'bio' => UserProfileResource::collection($this->profiles)
    //     ];
    // }
}
