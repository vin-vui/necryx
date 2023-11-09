<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Type;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();

        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        $articles = Article::all();
        $types = Type::all();
        return view('articles.create', compact('articles', 'types'));
    }

    public function store(Request $request)
    {
        $validData = $request->validate([
            'type_id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'image' => 'required',
            'description' => 'nullable',
            'status' => 'nullable',
        ]);

        $path = Storage::putFileAs('public', $request->image, $validData['title'] . '.' . $request->image->extension());
        $validData["image"] = $path;

        Article::create($validData);

        return redirect()->route('articles.index')
            ->with('success', 'Votre article a bien été enregistré !');
    }

    public function show(Article $article, Type $type)
    {
        $types = Type::all();

        return view('articles.show', compact('article', 'type'));
    }

    public function edit(Article $article, Type $types)
    {
        $types = Type::all();

        return view('articles.edit', compact('article', 'types'));
    }


    public function update(Request $request, Article $article)
    {
        $validData = $request->validate([
            'type_id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10240',
            'description' => 'nullable',
            'status' => 'nullable',
        ]);

        if($request->has('image')) {
            $path = Storage::putFileAs('public', $request->image, $validData['title'] . '.' . $request->image->extension());
            $validData["image"] = $path;
        }

        $article->update($validData);

        return redirect()->route('articles.index')->with('success', 'Article mis à jour avec succès !');
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Article supprimé avec succès !');
    }
}
