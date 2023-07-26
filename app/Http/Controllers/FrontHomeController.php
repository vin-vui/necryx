<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Newsletter;
use App\Models\User;
use App\Models\Collection;




class FrontHomeController extends Controller
{
    public function index(){

        $users = User::all(); 
        $articles = Article::all();
        
        return view('home.index', compact('users','articles'));

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
