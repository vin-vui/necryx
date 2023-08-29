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
        Mail::to(env('MAIL_TO_ADDRESS'))->send(new ContactForm($request->name));
    }
}
