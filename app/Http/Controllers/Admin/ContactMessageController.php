<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function list()
    {
        $contact_messages = ContactMessage::query()
            ->orderBy('created_at', 'DESC')
            ->paginate(10);

        return view('backend.pages.contact_message.list', compact('contact_messages'));
    }

    public function delete($id)
    {
        $contact_message = ContactMessage::findOrFail($id);

        $contact_message->delete();

        toastr()->success('Məlumat silindi');

        return redirect()->back();
    }

}
