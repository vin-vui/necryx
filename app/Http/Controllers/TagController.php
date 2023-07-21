<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    
    public function index()
    {
        $tags = Tag::all();

        return view ('tags.index', compact ('tags'));
    }


    // create function 
    public function create()
    {
        return view('tags.create');
    }

    public function store(Request $request)
    {
        $validData = $request->validate ([
            'name'=>'required'
            ]);
 
            Tag::create($validData);

        return redirect()->route('tags.index')
                        ->with ('success', 'Votre Tag à bien été enregistré !');
     }

    //  Show function
     public function show(Tag $tag)
    {
        return view('tags.show', ['tag' => $tag]);
    }



    // Edit function
    public function edit (Info $info)
    {
     
        return view('tags.edit',compact('tag'));

    }


    public function update(Request $request, Tag $tag)
    {
        $validData = $request->validate ([
           'name'=>'nullable'
       ]);

        $tag->update($validData);

     
        return redirect()->route('tags.index')
                       ->with ('success', 'Tag mis à jour avec succès !');

    }



    //  Destroy function
     public function destroy (Tag $tag)
     {
        $tag->delete();
        return redirect()->route('tags.index')
                            ->with ('success', 'Tag supprimé avec succès');
     }
}
