<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_en',
        'title_ar',
        'title_ru',
        'description_en',
        'description_ar',
        'description_ru',
        'email',
        'phone',
        'location_en',
        'location_ar',
        'location_ru',
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

    public function getLoactionAttribute()
    {
        $language = app()->getLocale();
        return $this->getAttribute("location_$language");
    }
}
