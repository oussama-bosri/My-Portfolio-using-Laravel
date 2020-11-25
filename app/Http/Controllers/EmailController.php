<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendingEmail;
class EmailController extends Controller
{
    function send(Request $request)
    {
 
        if(!empty($request->phone))
        {
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
                'message' => 'required',
                'phone' => 'numeric|regex:/^([0-9\s\-\+\(\)]*)$/|digits:12'
                ]);
        }

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            ]);

        $data = array(
            'name' => $request->name,
            'message' => $request->message,
            'phone' => $request->phone,
            'email' => $request->email,
        );
 
        $to = 'mail@hussamadil.com';

        Mail::to($to)->send(new sendingEmail($data));

        return back()->with('success', 'Thanks for contacting me!');
    }
}
