<?php

namespace App\Http\Controllers;

use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontConceptController extends Controller
{
    public function index()
    {
        return view ('concepts');
    }

    public function contact(Request $request)
    {
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactForm($request->name));
        // Mail::to($request->user())->send(new OrderShipped($order));
    }
}
