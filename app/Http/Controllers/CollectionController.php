<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Type;
use App\Models\Collection;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class CollectionController extends Controller
{

    /**
     * Display a listing of the resource.
     * @return View
     */
    public function index(): View
    {
        $collections = Collection::all();

        return view('collections.index', compact('collections'));
    }

    /**
     * Show the form for creating a new resource.
     * @return View
     */
    public function create(): View
    {
        $tags = Tag::all();
        $types = Type::all();

        return view('collections.create', compact('tags', 'types'));
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
            'name' => 'required',
            'type_id' => 'required',
            'content' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10240',
            'players' => 'nullable',
            'duration' => 'nullable',
            'age' => 'nullable',
            'origin' => 'nullable',
            'status' => 'required',
        ]);

        $path = Storage::putFileAs('public', $request->image, $validData['name'] . '.' . $request->image->extension());
        $validData["image"] = $path;

        $collection = Collection::create($validData);

        $collection->tags()->sync($request->tags);

        return redirect()->route('collections.index')->with('success', 'La collection a été ajoutée avec succès !');
    }

    /**
     * Show the form for editing the specified resource.
     * @param Collection $collection
     * @return View
     */
    public function edit(Collection $collection): View
    {
        $tags = Tag::all();
        $types = Type::all();

        return view('collections.edit', compact('collection', 'tags', 'types'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param Collection $collection
     * @return RedirectResponse
     * @throws ValidationException
     *
     */
    public function update(Request $request, Collection $collection): RedirectResponse
    {
        $validData = $request->validate([
            'name' => 'required',
            'type_id' => 'required',
            'content' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10240',
            'players' => 'nullable',
            'duration' => 'nullable',
            'age' => 'nullable',
            'origin' => 'nullable',
            'status' => 'required',
        ]);

        if($request->has('image')) {
            $path = Storage::putFileAs('public', $request->image, $validData['name'] . '.' . $request->image->extension());
            $validData["image"] = $path;
        }

        $collection->update($validData);
        $collection->tags()->sync($request->tags);

        return redirect()->route('collections.index')->with('success', 'Collection mise à jour avec succès !');
    }

    /**
     * Remove the specified resource from storage.
     * @param Collection $collection
     * @return RedirectResponse
     */
    public function destroy(Collection $collection): RedirectResponse
    {
        $collection->delete();

        return redirect()->route('collections.index')->with('success', 'La collection a été supprimée avec succès !');
    }
}
