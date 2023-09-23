<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServicesRequest;
use App\Http\Requests\UpdateSerrvicesRequest;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function list()
    {
        $servicesAr = Services::query()
            ->select('id', 'title_ar', 'description_ar', 'image_1', 'image_2', 'status')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        $servicesEn = Services::query()
            ->select('id', 'title_en', 'description_en', 'image_1', 'image_2', 'status')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        $servicesRu = Services::query()
            ->select('id', 'title_ru', 'description_ru', 'image_1', 'image_2', 'status')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        return view('backend.pages.services.list',
            compact([
                'servicesAr',
                'servicesEn',
                'servicesRu'
            ]));
    }

    public function create()
    {
        return view('backend.pages.services.create');
    }

    public function store(StoreServicesRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('image_1')) {
            $imageName_1 = rand(1, 1000) . time() . $request->image_1->getClientOriginalName();
            $request->image_1->move(public_path('uploads/services'), $imageName_1);
            $validated['image_1'] = $imageName_1;
        }

        if ($request->hasFile('image_2')) {
            $imageName_2 = rand(1, 1000) . time() . $request->image_2->getClientOriginalName();
            $request->image_2->move(public_path('uploads/services'), $imageName_2);
            $validated['image_2'] = $imageName_2;
        }

        Services::create($validated);

        toastr()->success('Məlumat əlavə olundu');

        return redirect()->back();

    }

    public function edit($id)
    {
        $services = Services::findOrFail($id);

        return view('backend.pages.services.edit', compact('services'));

    }

    public function update(UpdateSerrvicesRequest $request, $id)
    {
        $services =Services::findOrFail($id);

        $validated = $request->validated();

        if ($request->hasFile(['image_1', 'image_2'])) {
            $imageName = rand(1, 1000) . time() . $request->image->getClientOriginalName();
            $request->image->move(public_path('uploads/services'), $imageName);
            $validated['image_1'] = $imageName;
            $validated['image_2'] = $imageName;

        }

        $services->update($validated);

        toastr()->success('Məlumat yeniləndi');

        return redirect()->route('admin.services.list');
    }

    public function delete($id)
    {
        $services = Services::findOrFail($id);

        $image = $services->image;

        if (file_exists($image))
        {
            unlink($image);
        }
        $services->delete();

        toastr()->success('Məlumat silindi');

        return redirect()->back();
    }

}
