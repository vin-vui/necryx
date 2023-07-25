<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use Illuminate\Support\Facades\Storage;



class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all();

        return view ('types.index', compact ('types'));
    }


    // create function 
    public function create()
    {
        return view('types.create');
    }

    public function store(Request $request)
    {
        $validData = $request->validate ([
            'name'=>'required',
            'persona'=>'required',
            'image'=> 'required',
            'description'=>'nullable',
        ]);
 
        $path = Storage::putFileAs('public', $request->image, $validData['name'].'.'.$request->image->extension());
        $validData["image"] = $path;

        Type::create($validData);

        return redirect()->route('types.index')->with ('success', 'Votre type a bien été enregistré !');
     }

    //  Show function
     public function show(Type $type)
    {
        return view('types.show', ['type' => $type]);
    }



    // Edit function
    public function edit (Type $type)
    {
        return view('types.edit',compact('type'));
    }


    public function update(Request $request, Type $type)
    {
        $validData = $request->validate ([
            'name'=>'required',
            'persona'=>'required',
            'image'=> 'required',
        ]);

        $path = Storage::putFileAs('public', $request->image, $validData['name'].'.'.$request->image->extension());
        $validData["image"] = $path;

        $type->update($validData);

     
        return redirect()->route('types.index')->with ('success', 'Type mis à jour avec succès !');
    }



    //  Destroy function
     public function destroy (Type $type)
     {
        $type->delete();
        return redirect()->route('types.index')
                            ->with ('success', 'Type supprimé avec succès !');
     }
}
