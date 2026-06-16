<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SupportProgramResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'category' => $this->category,
            'audience' => $this->audience,
            'deadline' => $this->deadline?->format('Y-m-d'),
            'description' => $this->description,
            'imageUrl' => $this->image_url,
        ];
    }
}