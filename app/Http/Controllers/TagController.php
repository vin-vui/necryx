<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{

    public function index()
    {
        $tags = Tag::all();

        return view('tags.index', compact('tags'));
    }

    public function create()
    {
        return view('tags.create');
    }

    public function store(Request $request)
    {
        $validData = $request->validate([
            'name' => 'required',
            'description' => 'nullable'
        ]);

        Tag::create($validData);

        return redirect()->route('tags.index')->with('success', 'Votre Tag a bien été enregistré !');
    }

    public function show(Tag $tag)
    {
        return view('tags.show', ['tag' => $tag]);
    }

    public function edit(Tag $tag)
    {
        return view('tags.edit', compact('tag'));
    }

    public function update(Request $request, Tag $tag)
    {
        $validData = $request->validate([
            'name' => 'nullable',
            'description' => 'nullable'
        ]);

        $tag->update($validData);

        return redirect()->route('tags.index')->with('success', 'Tag mis à jour avec succès !');
    }

    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('tags.index')->with('success', 'Tag supprimé avec succès');
    }
}
