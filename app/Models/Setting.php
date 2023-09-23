<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'key_ar',
        'value_ar',
        'key_en',
        'value_en',
        'key_ru',
        'value_ru',
        'image',
        'status',
    ];
}
