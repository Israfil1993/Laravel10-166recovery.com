<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;
use Illuminate\Http\Request;
use App\Models\Setting;
use DB;

class SettingController extends Controller
{
    public function list()
    {
        $settingsAr = Setting::query()
            ->select('id', 'key_ar as key', 'value_ar as value', 'image', 'status')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        $settingsEn = Setting:: query()
            ->select('id', 'key_en as key', 'value_en as value', 'image', 'status')
            ->orderBy('id', 'desc')
            ->paginate(10);

        $settingsRu = Setting::query()
            ->select('id', 'key_ru as key', 'value_ru as value', 'image', 'status')
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('backend.pages.setting.list',
            compact([
                'settingsAr',
                'settingsEn',
                'settingsRu'
            ]));
    }

    public function create()
    {
        return view('backend.pages.setting.create');
    }

    public function store(StoreSettingRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/setting'), $imageName);
            $validated['image'] = $imageName;
        }

        Setting::create($validated);

        toastr()->success('Məlumat əlavə olundu');

        return redirect()->back();
    }

    public function edit($id)
    {
        $setting = Setting::findOrFail($id);

        return view('backend.pages.setting.edit', compact('setting'));
    }

    public function update(UpdateSettingRequest $request, $id)
    {
        $setting =Setting::findOrFail($id);

        $validated = $request->validated();

        if ($request->hasFile('image')) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/setting'), $imageName);
            $validated['image'] = $imageName;
        }

        $setting->update($validated);

        toastr()->success('Məlumat yeniləndi');

        return redirect()->route('admin.setting.list');
    }


    public function delete($id)
    {
        $settings = Setting::findOrFail($id);

        $image = $settings->image;

        if (file_exists($image))
        {
            unlink($image);
        }

        Setting::findOrfail($id)->delete();

        toastr()->success('Məlumat silindi');

        return redirect()->back();
    }

}

