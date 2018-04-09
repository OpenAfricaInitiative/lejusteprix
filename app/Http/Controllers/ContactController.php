<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
   public function store(ContactFormRequest $request)
    {
        
    
        $message=Contact::create($request->only('name','email','message'));
        $mailable= new ContactMessage($message);
               

        Mail::to('codesourceprog@gmail.com')->send($mailable);
        flashy()->success('Votre message a été envoyé avec succès! Nous vous répondrons bientot.');
        return redirect()->route('home');
    }
}
