<?php

namespace App\Models;

use App\Enums\SupportCategory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class SupportProgram extends Model
{
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['id', 'title', 'category', 'audience', 'deadline', 'description', 'image_url'];
    protected $casts = [
        'deadline' => 'date:Y-m-d',
        'category' => SupportCategory::class,
    ];

    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            if (empty($model->id)) {
                $model->id = 'sup-' . uniqid();
            }
        });
    }

    public function isActive(): bool
    {
        return is_null($this->deadline) || $this->deadline->greaterThanOrEqualTo(Carbon::today());
    }
}