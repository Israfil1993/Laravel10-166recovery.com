<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAboutRequest;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function list()
    {
        $aboutsAr = About::query()
            ->select('id', 'about_title_ar',
                'about_description_ar', 'about_image',
                'our_values_title_ar', 'our_values_description_ar',
                'vision_description_ar', 'vision_image',
                'mission_description_ar', 'mission_image', 'status')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        $aboutsEn = About::query()
            ->select('id', 'about_title_en',
                'about_description_en', 'about_image',
                'our_values_title_en', 'our_values_description_en',
                'vision_description_en', 'vision_image',
                'mission_description_en', 'mission_image', 'status')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        $aboutsRu = About::query()
            ->select('id', 'about_title_ru',
                'about_description_ru', 'about_image',
                'our_values_title_ru', 'our_values_description_ru',
                'vision_description_ru', 'vision_image',
                'mission_description_ru', 'mission_image', 'status')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        return view('backend.pages.about.list',
            compact([
                'aboutsAr',
                'aboutsEn',
                'aboutsRu'
            ]));
    }

    public function create()
    {
        return view('backend.pages.about.create');
    }

    public function store(StoreAboutRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('about_image')) {
            $imageName_1 = rand(1, 1000) . time() . $request->about_image->getClientOriginalName();
            $request->about_image->move(public_path('uploads/abouts'), $imageName_1);
            $validated['about_image'] = $imageName_1;
        }

        if ($request->hasFile('vision_image')) {
            $imageName_2 = rand(1, 1000) . time() . $request->vision_image->getClientOriginalName();
            $request->vision_image->move(public_path('uploads/abouts'), $imageName_2);
            $validated['vision_image'] = $imageName_2;
        }

        if ($request->hasFile('mission_image')) {
            $imageName_3 = rand(1, 1000) . time() . $request->mission_image->getClientOriginalName();
            $request->mission_image->move(public_path('uploads/abouts'), $imageName_3);
            $validated['mission_image'] = $imageName_2;
        }

        About::create($validated);

        toastr()->success('Məlumat əlavə olundu');

        return redirect()->back();

    }

    public function delete($id)
    {
        $about = About::findOrFail($id);

        $about_image = $about->about_image;
        $vision_image = $about->vision_image;
        $mission_image = $about->mission_image;

        if (file_exists($about_image)) {
            unlink($about_image);
        }
        if (file_exists($vision_image)) {
            unlink($vision_image);
        }
        if (file_exists($mission_image)) {
            unlink($mission_image);
        }
        $about->delete();

        toastr()->success('Məlumat silindi');

        return redirect()->back();
    }

}
