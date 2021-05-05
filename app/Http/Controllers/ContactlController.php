<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\Contact\StoreRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendingEmail;

class ContactlController extends Controller
{
    function sendEmail(StoreRequest $request)
    {
  
        $contactData = array(
            'name' => $request->name,
            'message' => $request->message,
            'phone' => $request->phone,
            'email' => $request->email);
        
        Customer::create($contactData);

        $to = 'mail@hussamadil.com';

        Mail::to($to)->send(new sendingEmail($contactData));

        return back()->with('success', 'Thanks for contacting me!');
    }
}
