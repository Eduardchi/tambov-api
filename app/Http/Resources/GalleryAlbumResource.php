<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GalleryAlbumResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id'            => $this->id,
            'title'         => $this->title,
            'date'          => $this->date->format('Y-m-d'),
            'photoCount'    => $this->photos->count(),
            'coverUrl'      => $this->cover_url,
            'yandexDiskUrl' => $this->yandex_disk_url,
        ];
    }
}