<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactSendmail;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactFormRequest $request)
    {
        $contact = $request->all();
        return view('confirm',compact('contact'));
    }

    public function send(ContactFormRequest $request)
    {
        $contact = $request->all();
        // \Mail::to('your_address@example.com')->send(new ContactSendmail($contact));
        // $request->session()->regenerateToken();
        return view('thanks');
    }
}
