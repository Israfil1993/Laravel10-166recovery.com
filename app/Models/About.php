<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'about_title_ar',
        'about_title_en',
        'about_title_ru',
        'about_description_ar',
        'about_description_en',
        'about_description_ru',
        'about_image',
        'our_values_title_ar',
        'our_values_title_en',
        'our_values_title_ru',
        'our_values_description_ar',
        'our_values_description_en',
        'our_values_description_ru',
        'vision_description_ar',
        'vision_description_en',
        'vision_description_ru',
        'vision_image',
        'mission_description_ar',
        'mission_description_en',
        'mission_description_ru',
        'mission_image',
        'status'
    ];

    public function getAboutTitleAttribute()
    {
        $language = app()->getLocale();
        return $this->getAttribute("about_title_$language");
    }

    public function getAboutDescriptionAttribute()
    {
        $language = app()->getLocale();
        return $this->getAttribute("about_description_$language");
    }

    public function getOurValuesTitleAttribute()
    {
        $language = app()->getLocale();
        return $this->getAttribute("our_values_title_$language");
    }

    public function getOurValuesDescriptionAttribute()
    {
        $language = app()->getLocale();
        return $this->getAttribute("our_values_description_$language");
    }

    public function getVisionDescriptionAttribute()
    {
        $language = app()->getLocale();
        return $this->getAttribute("vision_description_$language");
    }

    public function getMissionDescriptionAttribute()
    {
        $language = app()->getLocale();
        return $this->getAttribute("mission_description_$language");
    }
}
