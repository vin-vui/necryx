<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Article;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index(): View
    {
        $articles = Article::all();

        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function create(): View
    {
        $types = Type::all();

        return view('articles.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $validData = $request->validate([
            'type_id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10240',
            'description' => 'nullable',
            'status' => 'required',
        ]);

        $path = Storage::putFileAs('public', $request->image, $validData['title'] . '.' . $request->image->extension());
        $validData["image"] = $path;

        Article::create($validData);

        return redirect()->route('articles.index')->with('success', 'Votre article a bien été enregistré !');
    }

    /**
     * Show the form for editing the specified resource.
     * @param Article $article
     * @return View
     */
    public function edit(Article $article): View
    {
        $types = Type::all();

        return view('articles.edit', compact('article', 'types'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param Article $article
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Request $request, Article $article): RedirectResponse
    {
        $validData = $request->validate([
            'type_id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10240',
            'description' => 'nullable',
            'status' => 'required',
        ]);

        if($request->has('image')) {
            $path = Storage::putFileAs('public', $request->image, $validData['title'] . '.' . $request->image->extension());
            $validData["image"] = $path;
        }

        $article->update($validData);

        return redirect()->route('articles.index')->with('success', 'Article mis à jour avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     * @param Article $article
     * @return RedirectResponse
     */
    public function destroy(Article $article): RedirectResponse
    {
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Article supprimé avec succès !');
    }
}
