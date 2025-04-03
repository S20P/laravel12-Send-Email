<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriberEmail;

class SubscriberController extends Controller
{
    public function subscribe(Request $request)
    {

        try {   

            $to_email = "recipient_gmail@gmail.com";

            $mailData = [           
                'title' => 'Welcome to tipinfotrove.com'
            ];           
           
            Mail::to($to_email)->send(new SubscriberEmail($mailData));
    
            return response()->json(['status' => true,'message' => 'Thank you for subscribing!'],200);
            
        } catch (\Exception $e) {
            return response('An error occurred: ' . "Something goes wrong!!", 500);
        }          
      
    }

}
