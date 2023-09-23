<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $fillable =[
        'question_ar',
        'question_en',
        'question_ru',
        'answer_ar' ,
        'answer_en',
        'answer_ru',
        'status'
    ];

    public function getQuestionAttribute()
    {
        $language = app()->getLocale();
        return $this->getAttribute("question_$language");
    }

    public function getAnswerAttribute()
    {
        $language = app()->getLocale();
        return $this->getAttribute("answer_$language");
    }
}
