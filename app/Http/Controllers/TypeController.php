<?php

namespace App\Http\Controllers;

use App\Models\Type;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all();

        return view ('types.index', compact ('types'));
    }

    public function create()
    {
        return view('types.create');
    }

    public function store(Request $request)
    {
        $validData = $request->validate ([
            'name' => 'required',
            'persona' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10240',
            'description' => 'nullable',
        ]);

        $path = Storage::putFileAs('public', $request->image, $validData['name'].'.'.$request->image->extension());
        $validData["image"] = $path;

        Type::create($validData);

        return redirect()->route('types.index')->with ('success', 'Votre type a bien été enregistré !');
     }

     public function show(Type $type)
    {
        return view('types.show', ['type' => $type]);
    }

    public function edit (Type $type)
    {
        return view('types.edit',compact('type'));
    }

    public function update(Request $request, Type $type)
    {
        $validData = $request->validate ([
            'name'=>'required',
            'persona'=>'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg,webp|max:10240',
            'description' => 'nullable',
        ]);

        if($request->has('image')) {
            $path = Storage::putFileAs('public', $request->image, $validData['name'] . '.' . $request->image->extension());
            $validData["image"] = $path;
        }

        $type->update($validData);

        return redirect()->route('types.index')->with ('success', 'Type mis à jour avec succès !');
    }

     public function destroy (Type $type)
     {
        $type->delete();

        return redirect()->route('types.index')->with ('success', 'Type supprimé avec succès !');
     }
}
