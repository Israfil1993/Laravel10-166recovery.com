<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreContactMessageRequest;
use App\Models\Contact;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index($slug = null)
    {
        $contact = Contact::query()
            ->where('status', 'Active')
            ->limit(1)
            ->first();
        return view('frontend.pages.contact.contact', compact('contact',));
    }

    public function message(StoreContactMessageRequest $request)
    {
        $validated = $request->validated();

        ContactMessage::create($validated);

        toastr()->success('Mesajınız uğurla göndərildi');

        return redirect()->back();

    }
}
