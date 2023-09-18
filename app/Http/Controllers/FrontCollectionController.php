<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\Tag;

class FrontCollectionController extends Controller
{
    public function index($type)
    {
        $collections = Collection::where('types', $type)->get();

        return view ('collections', compact('collections'));
    }

    public function show (Collection $collection)
    {
        $tags = Tag::all();

        return view ('collection', compact('collection'));
    }
}
