<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFaqRequest;
use App\Http\Requests\UpdateFaqRequest;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function list()
    {
        $faqAr = Faq::query()
            ->select('id', 'question_ar', 'answer_ar ', 'status')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        $faqEn = Faq::query()
            ->select('id', 'question_en ', 'answer_en', 'status')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        $faqRu = Faq::query()
            ->select('id', 'question_ru ', 'answer_ru', 'status')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        return view('backend.pages.faq.list',
            compact([
                'faqAr',
                'faqEn',
                'faqRu'
            ]));
    }

    public function create()
    {
        return view('backend.pages.faq.create');
    }

    public function store(StoreFaqRequest $request)
    {
        $validated = $request->validated();

        Faq::create($validated);

        toastr()->success('Məlumat əlavə olundu');

        return redirect()->back();

    }

    public function edit($id)
    {
        $faq = Faq::findOrFail($id);

        return view('backend.pages.faq.edit', compact('faq'));
    }

    public function update(UpdateFaqRequest $request, $id)
    {
        $faq =Faq::findOrFail($id);

        $validated = $request->validated();

        $faq->update($validated);

        toastr()->success('Məlumat yeniləndi');

        return redirect()->route('admin.faq.list');
    }

    public function delete($id)
    {
        $faq = Faq::findOrFail($id);

        $faq->delete();

        toastr()->success('Məlumat silindi');

        return redirect()->back();
    }


}
