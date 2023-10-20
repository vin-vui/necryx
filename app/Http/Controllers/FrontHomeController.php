<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Slider;
use App\Models\Article;
use App\Mail\ContactForm;
use App\Models\Collection;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FrontHomeController extends Controller
{
    public function index()
    {
        $users = User::all();
        $articles = Article::where('status', 1)->latest()->limit(3)->get();
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

    public function informations()
    {
        return view ('home.informations');
    }

    public function concepts()
    {
        return view ('home.concepts');
    }

    public function contact(Request $request)
    {
        Mail::to(env('MAIL_TO_ADDRESS'))->send(new ContactForm($request->name));
    }

    public function collections($type)
    {
        $collections = Collection::where('types', $type)->get();

        return view ('home.collections', compact('collections'));
    }

    public function collection(Collection $collection)
    {
        return view ('home.collection', compact('collection'));
    }

    public function articles()
    {
        $articles = Article::where('status', 1)->latest()->get();

        return view ('home.articles', compact('articles'));
    }

    public function article(Article $article)
    {
        return view ('home.article', compact('article'));
    }

    public function subscribe(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'email' => 'required|email|unique:newsletters,email',
        ]);

        // Enregistrer l'adresse e-mail dans la base de données
        Newsletter::create([
            'email' => $request->email,
        ]);

        // Afficher un message de confirmation
        return redirect()->back()->with('success', 'Vous êtes inscrit à notre newsletter !');
    }
}
