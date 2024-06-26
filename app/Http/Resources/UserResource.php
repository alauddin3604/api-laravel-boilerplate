<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'email' => $this->email,
            'role' => $this->role,
            'profile' => ProfileResource::make($this->whenLoaded('profile')),
            'created_at' => $this->created_at->setTimeZone('Asia/Kuala_Lumpur')->toDateTimeString(),
            'updated_at' => $this->updated_at->setTimeZone('Asia/Kuala_Lumpur')->toDateTimeString(),
        ];
    }
}
