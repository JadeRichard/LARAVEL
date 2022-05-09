<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request){
        $user = [
            'name' => $request->name,
            "message" => $request->message,
            'email' => $request->email
        ];

        Mail::to($user['email'])->send(new ContactMail($user));
        return redirect()->back();
    }
}
