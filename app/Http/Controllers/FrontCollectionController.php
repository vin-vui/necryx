<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Collection;

class FrontCollectionController extends Controller
{
    public function index($type)
    {
        $collections = Collection::where('types', $type)->get();

        return view ('collections', compact('collections'));
    }

    public function show (Collection $collection)
    {
        $collection->tags()->sync($request->tags);
        
        return view ('collection', compact('collection'));
    }
}
