<?php

namespace App\Http\Controllers;

use App\Mail\MailSubscriber;
use App\Mail\Subscriber;
use App\Models\Newsletter;
use App\Models\Subscribe;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class SubscriberController extends Controller
{
    public function subscriber(Request $request) 
{
    $validator = Validator::make($request->all(), [
         'email' => 'required'
    ]);

    if ($validator->fails()) {
        return new JsonResponse(['success' => false, 'message' => $validator->errors()], 422);
    }  

    $email = $request->all()['email'];
        $subscriber = Subscribe::create([
            'email' => $email
        ]
    ); 

    if ($subscriber) {
        Mail::to($email)->send(new Subscriber($email));
        return redirect()->back();
    }
}

}
