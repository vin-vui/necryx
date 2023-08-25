<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();

        return view ('sliders.index', compact ('sliders'));
    }


    // create function 
    public function create()
    {
        return view('sliders.create');
    }

    public function store(Request $request)
    {
        $validData = $request->validate ([
            'name'=>'required',
            'image'=>'required',
            'description'=>'required',
            'order'=>'nullable|integer',
            'status'=>'required',
        ]);

        $path = Storage::putFileAs('public', $request->image, $validData['name'] . '.' . $request->image->extension());
        $validData["image"] = $path;

        Slider::create($validData);


        return redirect()->route('sliders.index')
                        ->with ('success', 'Votre image a bien été enregistrée !');
     }

     //  Show function
     public function show(Slider $slider)
    {
        return view('sliders.show', ['slider' => $slider]);
    }

    // Edit function
    public function edit (Slider $slider)
    {
     
        return view('sliders.edit',compact('slider'));

    }

    public function update(Request $request, Slider $slider)
    {
        $validData = $request->validate ([
            'name'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
            'description'=>'required',
            'order'=>'nullable',
            'status'=>'required',
       ]);


        $path = Storage::putFileAs('public', $request->image, $validData['name'].'.'.$request->image->extension());
        $validData["image"] = $path;


        $slider->update($validData);

     
        return redirect()->route('sliders.index')
                       ->with ('success', 'Image mise à jour avec succès !');

    }

    //  Destroy function
    public function destroy (Slider $slider)
    {
       $slider->delete();
       return redirect()->route('sliders.index')
                           ->with ('success', 'Image supprimée avec succès');
    }

}
