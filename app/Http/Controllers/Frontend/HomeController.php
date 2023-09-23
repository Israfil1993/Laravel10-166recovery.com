<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHomeMessageRequest;
use App\Models\Blog;
use App\Models\Faq;
use App\Models\HomeMesssage;
use App\Models\Services;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $blogs = Blog::query()
            ->where('status', 'Active')
            ->orderBy('created_at', 'DESC')
            ->get();


        $service = Services::query()
            ->where('status', 'Active')
            ->orderBy('created_at', 'DESC')
            ->first();

        $services = Services::query()
            ->where('status', 'Active')
            ->orderBy('created_at', 'DESC')
            ->get();

        $faqs = Faq::query()
            ->where('status', 'active')
            ->orderBy('created_at', 'DESC')
            ->limit(10)
            ->get();



        return view('frontend.home.home',
            compact([
                'blogs',
                'service',
                'services',
                'faqs',

        ]));
    }

    public function homeMessage(StoreHomeMessageRequest $request)
    {
        $validated = $request->validated();

        HomeMesssage::create($validated);

        toastr()->success('Mesajınız uğurla göndərildi');

        return redirect()->back();

    }
}
