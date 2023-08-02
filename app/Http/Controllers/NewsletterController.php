<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;


class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'email' => 'required|email|unique:newsletters,email',
        ]);

        // Enregistrer l'adresse e-mail dans la base de données
        Newsletter::create([
            'email' => $request->email,
        ]);

        // Afficher un message de confirmation
        return redirect()->back()->with('success', 'Vous êtes inscrit à notre newsletter !');
    }
}
