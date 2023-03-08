<?php

namespace App\Http\Controllers;

use App\Mail\Mail as MailMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // process email
        Mail::to('example@example.com')->send(new MailMail($request->subject, $request->emailBody));

        return redirect()->back();
    }
}
