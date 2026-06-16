<?php

namespace App\Models;

use App\Enums\NewsCategory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id', 'title', 'date', 'category', 'description', 'image_url'];
    protected $casts = [
        'date' => 'date:Y-m-d',
        'category' => NewsCategory::class,
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = 'news-' . uniqid();
            }
        });
    }
}