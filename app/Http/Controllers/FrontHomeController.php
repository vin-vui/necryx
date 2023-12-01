<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Slider;
use App\Models\Article;
use App\Mail\ContactForm;
use App\Models\Collection;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Mail;

class FrontHomeController extends Controller
{
    /**
     * Display the home page.
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $users = User::all();
        $articles = Article::where('status', 'published')->latest()->limit(3)->get();
        $sliders = Slider::where('status', 1)->orderBy('order')->get();
        $games = Collection::where('status', 'published')->where('type_id', 1)->get();

        return view('home.index', compact('users','articles', 'sliders', 'games'));
    }

    /**
     * Add recipient to newsletter.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function addRecipient(Request $request)
    {
        $validData = $request->validate ([
            'email' => 'required|email',
        ]);

        Newsletter::create($validData);

        session()->flash('flash.banner', 'Inscription prise en compte !');
        session()->flash('flash.bannerStyle', 'success');

        return redirect()->back();
    }

    /**
     * Display the login page.
     * @return \Illuminate\Contracts\View\View
     */
    public function login()
    {
        return view('login');
    }

    /**
     * Display the informations page.
     * @return \Illuminate\Contracts\View\View
     */
    public function informations()
    {
        return view ('home.informations');
    }

    /**
     * Display the concepts page.
     * @return \Illuminate\Contracts\View\View
     */
    public function concepts()
    {
        return view ('home.concepts');
    }

    /**
     * Display the shop page.
     * @return \Illuminate\Contracts\View\View
     */
    public function shop()
    {
        return view ('home.shop');
    }

    /**
     * Send contact form.
     * @param Request $request
     * @return void
     */
    public function contact(Request $request)
    {
        Mail::to(env('MAIL_TO_ADDRESS'))->send(new ContactForm($request->name));
    }

    /**
     * Display a listing of collections.
     * @param $type
     * @return View
     */
    public function collections($type_id): View
    {
        $collections = Collection::where('type_id', $type_id)->where('status', 'published')->get();

        return view ('home.collections', compact('collections'));
    }

    /**
     * Display the specified collection.
     * @param Collection $collection
     * @return View
     */
    public function collection(Collection $collection): View
    {
        return view ('home.collection', compact('collection'));
    }

    /**
     * Display a listing of articles.
     * @return \Illuminate\Contracts\View\View
     */
    public function articles()
    {
        $articles = Article::where('status', 'published')->latest()->get();

        return view ('home.articles', compact('articles'));
    }

    /**
     * Display the specified article.
     * @param Article $article
     * @return \Illuminate\Contracts\View\View
     */
    public function article(Article $article)
    {
        return view('home.article', compact('article'));
    }

    /**
     * Subscribe to newsletter.
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        Newsletter::create([
            'email' => $request->email,
        ]);

        return redirect()->back()->with('success', 'Vous êtes inscrit à notre newsletter !');
    }
}
