<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function list()
    {
        $contactsAr = Contact::query()
            ->select('id', 'title_ar', 'description_ar', 'email', 'phone', 'location_ar','status')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        $contactsEn = Contact:: query()
            ->select('id', 'title_en', 'description_en', 'email', 'phone', 'location_en','status')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        $contactsRu = Contact::query()
            ->select('id', 'title_ru', 'description_ru', 'email', 'phone', 'location_ru','status')
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        return view('backend.pages.contact.list',
            compact([
                'contactsAr',
                'contactsEn',
                'contactsRu'
            ]));
    }

    public function create()
    {
        return view('backend.pages.contact.create');

    }

    public function store(StoreContactRequest $request)
    {
        $validated = $request->validated();

        Contact::create($validated);

        toastr()->success('Məlumat əlavə olundu');

        return redirect()->back();

    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);

        return view('backend.pages.contact.edit', compact('contact'));
    }

    public function update(UpdateContactRequest $request, $id)
    {
        $contact = Contact::findOrFail($id);

        $validated = $request->validated();

        $contact->update($validated);

        toastr()->success('Məlumat yeniləndi');

        return redirect()->route('admin.contact.list');


    }

    public function delete($id)
    {
        $contac = Contact::findOrFail($id);

        $contac->delete();

        toastr()->success('Məlumat silindi');

        return redirect()->back();
    }
}
