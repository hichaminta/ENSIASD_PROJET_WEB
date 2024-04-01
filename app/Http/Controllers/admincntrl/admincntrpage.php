<?php

namespace App\Http\Controllers\admincntrl;

use App\Http\Controllers\Controller;
use App\Models\Actualite;
use Illuminate\Http\Request;

class admincntrpage extends Controller
{
    function indexcntrlpage()
    {
        return view('Admin.index');
    }
    public function affcher_evenement()
    {
        $evenements = Actualite::where('Typeactualites', '=', 'ev')->get();


        return view('Admin.evenement.index', ['evenements' => $evenements]);
    }
    function ajouter_evenement(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'placeevenement' => 'required|string',
            'date' => 'required|date',
        ]);

        // Si une image est fournie, sauvegardez-la
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/image/actualite'), $imageName); // Modifier le chemin de destination ici
            $imagePath = $imageName;
        }

        // Créez un nouvel événement
        $evenement = new Actualite();
        $evenement->Titreactualites = $request->titre;
        $evenement->Descriptionactualites = $request->description;
        $evenement->image = $imagePath;
        $evenement->placeevenement = $request->placeevenement;
        $evenement->dateactualites = $request->date;
        $evenement->Typeactualites = 'ev';
        $evenement->Createur = 'ev';

        // Enregistrer l'événement dans la base de données
        $evenement->save();

        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'Événement ajouté avec succès.');
    }
    function modifier_evenement()
    {
        return view('Admin.index');
    }
    function suprimer_evenement(Actualite $id)
    {
        $id->delete();

        return redirect()->back()->with('success', 'Événement supprimé avec succès');
    }
    function affcher_actualite()

    {
        $actualites = Actualite::where('Typeactualites', '=', 'act')->get();


        return view('Admin.actualite.index', ['actualites' => $actualites]);
    }
    function ajouter_actualite(Request $request)
    {
        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'placeevenement' => 'required|string',
            'date' => 'required|date',
        ]);

        // Si une image est fournie, sauvegardez-la
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/image/actualite'), $imageName); // Modifier le chemin de destination ici
            $imagePath = $imageName;
        }

        // Créez un nouvel événement
        $evenement = new Actualite();
        $evenement->Titreactualites = $request->titre;
        $evenement->Descriptionactualites = $request->description;
        $evenement->image = $imagePath;
        $evenement->placeevenement = $request->placeevenement;
        $evenement->dateactualites = $request->date;
        $evenement->Typeactualites = 'act';
        $evenement->Createur = 'admin';

        // Enregistrer l'événement dans la base de données
        $evenement->save();

        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'Événement ajouté avec succès.');
    }
    function modifier_actualite()
    {
        return view('Admin.index');
    }
    function suprimer_actualite(Actualite $id)
    {
        $id->delete();

        return redirect()->back()->with('success', 'Événement supprimé avec succès');
        return view('Admin.index');
    }
}
