<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact;
use Mail;
use Alert;

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contact');
    }

    public function sendMail(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'subject' => 'required',
            'fullname' => 'required',
            'message' => 'required',
        ]);

        $details = [
            'email' => $request->email,
            'subject' => $request->subject,
            'name' => $request->fullname,
            'message' => $request->message,
        ];

        try{
            Mail::to('sales@duasembadasakti.com')->send(new Contact($details));
            Alert::toast('Email Successfully Sent', 'success');
            return redirect()->back();
        }catch(Exception $err){
            Alert::toast('Sent Email Failed', 'error');
            return redirect()->route('contact');
        }

        

    }

}
