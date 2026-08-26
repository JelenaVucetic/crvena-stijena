<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(ContactRequest $request)
    {
        Mail::to(config('mail.contact_to'))->send(new ContactMail($request->validated()));
        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
}
