<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view ('articles.index', compact ('articles'));
    }


    // create function 
    public function create()
    {
        $articles = Article::all();
        return view('articles.create', compact('articles'));
    }

    public function store(Request $request)
    {
        $validData = $request->validate ([
            'type_id'=>'required',
            'title'=>'required',
            'content'=> 'required',
            'image'=> 'required',
            'description' => 'nullable',
            'status' => 'nullable',
            ]);

            $path = Storage::putFileAs('public', $request->image, $validData['title'].'.'.$request->image->extension());
            $validData["image"] = $path;

            $validData["user_id"]=auth()->id();
            Article::create($validData);

        return redirect()->route('articles.index')
                        ->with ('success', 'Votre article a bien été enregistré !');
     }

    //  Show function
     public function show(Article $article)
    {
        return view('articles.show', compact('articles'));
    }


    // Edit function
    public function edit (Article $article)
    {
     
        return view('articles.edit', compact('article'));

    }


    public function update(Request $request, Article $article)
    {
        $validData = $request->validate ([
            'type_id'=>'required',
            'title'=>'required',
            'content'=> 'required',
            'image'=> 'required',
            'description' => 'nullable',
            'status' => 'nullable',
       ]);

        $article->update($validData);

     
        return redirect()->route('articles.index')
                       ->with ('success', 'Article mis à jour avec succès !');

    }



    //  Destroy function
     public function destroy (Article $article)
     {
        $tag->delete();
        return redirect()->route('articles.index')
                            ->with ('success', 'Article supprimé avec succès !');
     }
}
