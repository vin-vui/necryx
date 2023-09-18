<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Newsletter;
use App\Models\User;
use App\Models\Collection;
use App\Models\Slider;

class FrontHomeController extends Controller
{

    public function index()
    {
        $users = User::all();
        $articles = Article::limit(3)->get();
        $sliders = Slider::where('status', 1)->orderBy('order')->get();
        $games = Collection::where('status', 1)->where('types', 'jeu')->orderBy('order')->get();

        return view('home.index', compact('users','articles', 'sliders', 'games'));
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
