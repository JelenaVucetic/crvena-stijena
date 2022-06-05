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
        /*Mail::send('contact_email', array(
            'name' => $request->validated('name'),
            'email' => $request->validated('email'),
            'message' => $request->validated('message'),
        ), function($message) use ($request){
            $message->from($request->validated('email'));
            $message->to('admin@admin.com', 'Admin')->subject("Subject");
        });*/


        Mail::to('jelenavucetic24@gmail.com')->send(new ContactMail($request->validated()));
        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }
}
