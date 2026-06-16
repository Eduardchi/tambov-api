<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\City;
use App\Enums\EventCategory;

class Event extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id', 'title', 'date', 'location', 'category', 'image_url', 'description'];
    protected $casts = [
        'date' => 'date:Y-m-d',
        'location' => City::class,
        'category' => EventCategory::class,
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = 'evt-' . uniqid();
            }
        });
    }
}