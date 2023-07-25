<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;
use App\Models\Tag;
use App\Models\Article;
use App\Models\Type;
use Illuminate\Support\Facades\Storage;

class CollectionController extends Controller
{
    public function index()
    {
        $collections = Collection::all();

        return view('collections.index', compact('collections'));
    }


    // create function

    public function create()
    {
        $tags = Tag::all();
        return view('collections.create', compact('tags'));
    }

    public function store(Request $request)
    {

        $validData = $request->validate([
            'name' => 'required',
            'types' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'number_players' => 'nullable',
            'duration' => 'nullable',
            'age' => 'nullable',
            'origin' => 'nullable',
            'example' => 'nullable',
        ]);



        $path = Storage::putFileAs('public', $request->image, $validData['name'] . '.' . $request->image->extension());
        $validData["image"] = $path;

        $collection = Collection::create($validData);

        $collection->tags()->sync($request->tags);
        $collection->articles()->sync($request->articles);



        return redirect()->route('collections.index')
            ->with('success', 'La collection a été ajoutée avec succès !');
    }


    //  show function

    public function show(Collection $collection)
    {
        return view('collections.show', compact('collection'));
    }


    //  update function

    public function edit(Collection $collection)
    {

        $tags = Tag::all();
        $articles = Collection::all();

        return view('collections.edit', compact('collection', 'tags', 'articles'));
    }



    public function update(Request $request, Collection $collection)

    {

        $validData = $request->validate([
            'name' => 'required',
            'types' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'number_players' => 'nullable',
            'duration' => 'nullable',
            'age' => 'nullable',
            'origin' => 'nullable',
            'example' => 'nullable',
        ]);

        $path = Storage::putFileAs('public', $request->image, $validData['name'] . '.' . $request->image->extension());
        $validData["image"] = $path;

        $collection->update($validData);

        $collection->tags()->sync($request->tags);
        $collection->articles()->sync($request->articles);



        return redirect()->route('collections.index')
            ->with('success', 'Collection mise à jour avec succès !');
    }

    //  destroy function

    public function destroy(Collection $collection)
    {
        $collection->delete();

        return redirect()->route('collection.index')
            ->with('success', 'La collection a été supprimée avec succès !');
    }
}
