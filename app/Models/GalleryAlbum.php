<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryAlbum extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id', 'title', 'date', 'cover_url', 'yandex_disk_url'];
    protected $casts = [
        'date' => 'date:Y-m-d',
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = 'album-' . uniqid();
            }
        });
    }

    public function photos()
    {
        return $this->hasMany(Photo::class, 'album_id')->orderBy('sort_order');
    }
}