<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Newsletter;
use App\Models\User;
use App\Models\Collection;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;



class FrontHomeController extends Controller
{
    public function index(){

        $users = User::all(); 
        $articles = Article::all();
        $sliders = Slider::where('status', 1)->orderBy('order')->get();
        $collections = Collection::where('status', 1)->orderBy('order')->get();

        
        return view('home.index', compact('users','articles', 'sliders', 'collections'));

    }

    public function addRecipient(Request $request)
    {
        $validData = $request->validate ([
            'email'=>'required',
            ]);
 
            Newsletter::create($validData);

        //banner with registration confirmation
        session()->flash('flash.banner', 'Inscription prise en compte !');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->back();
    }

    public function login() 
    {
        return view('login');
    }
}
