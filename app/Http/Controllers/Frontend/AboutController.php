<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function showAbout()
    {
        $about = About::query()->where('status', 'Active')->first();

        $abouts = About::query()
            ->select('id', 'our_values_title_ar',
                'our_values_title_en', 'our_values_title_ru',
                'our_values_description_ar', 'our_values_description_en',
                'our_values_description_ru')
            ->where('status', 'Active')
            ->get();

        return view('frontend.pages.about.about', compact('about', 'abouts'));
    }
}
