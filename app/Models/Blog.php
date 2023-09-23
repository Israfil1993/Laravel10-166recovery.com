<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_ar',
        'title_en',
        'title_ru',
        'description_ar',
        'description_en',
        'description_ru',
        'image',
        'published_at',
        'status',
    ];

    public function getTitleAttribute()
    {
        $language = app()->getLocale();
        return $this->getAttribute("title_$language");
    }

    public function getDescriptionAttribute()
    {
        $language = app()->getLocale();
        return $this->getAttribute("description_$language");
    }

}
