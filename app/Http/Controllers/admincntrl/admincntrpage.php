<?php

namespace App\Http\Controllers\admincntrl;

use App\Http\Controllers\Controller;
use App\Models\Actualite;
use App\Models\annonce;
use App\Models\contact;
use App\Models\emploi_de_temps;
use App\Models\filiere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4000',
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
    function modifier_evenement(Request $request,Actualite $id,$titre)
    {
            // Valider les données du formulaire
    $validatedData = $request->validate([
        'titre' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4000',
        'placeevenement' => 'required|string',
        'date' => 'required|date',
    ]);

    // Mettre à jour les champs de l'événement
   $id->Titreactualites = $request->titre;
   $id->Descriptionactualites = $request->description;
   $id->placeevenement = $request->placeevenement;
   $id->dateactualites = $request->date;

    // Mettre à jour l'image si une nouvelle est fournie
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/image/actualite'), $imageName); // Modifier le chemin de destination ici
       $id->image = $imageName;
    }

    // Enregistrer les modifications dans la base de données
   $id->save();

    // Rediriger avec un message de succès
    return redirect()->back()->with('success', 'modification avec succès.');
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4000',
            'placeactualite' => 'required|string',
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
        $evenement->placeevenement = $request->placeactualite;
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
    public function ajouter_filieres(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'pdf' => 'nullable|mimes:pdf|max:4000',
        ]);

        // Si un fichier PDF est fourni, sauvegardez-le
        $pdfPath = null;
        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf');
            $pdfName = time() . '.' . $pdf->getClientOriginalExtension();
            $pdf->move(public_path('assets/pdf/'), $pdfName);
            $pdfPath = $pdfName;
        }

        // Créer une nouvelle filière
        $filiere = new Filiere();
        $filiere->titre = $request->titre;
        $filiere->pdf = $pdfPath;

        // Enregistrer la filière dans la base de données
        $filiere->save();

        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'Filière ajoutée avec succès.');
    }

    // Afficher toutes les filières
    public function affcher_filieres()
    {
        $filieres = DB::table('filieres')->select('id', 'titre', 'pdf', 'created_at', 'updated_at')->get();

        return view('Admin.filiere.index', ['filieres' => $filieres]);
    }

    // Modifier une filière
    public function modifier_filiere(Request $request, $id)
    {
        // Récupérer la filière à modifier
        $filiere = Filiere::findOrFail($id);

        // Valider les données du formulaire
        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'pdf' => 'nullable|mimes:pdf|max:4000',
        ]);

        // Mettre à jour les champs de la filière
        $filiere->titre = $request->titre;

        // Mettre à jour le fichier PDF si un nouveau est fourni
        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf');
            $pdfName = time() . '.' . $pdf->getClientOriginalExtension();
            $pdf->move(public_path('assets/pdf/'), $pdfName);
            $filiere->pdf = $pdfName;
        }

        // Enregistrer les modifications dans la base de données
        $filiere->save();

        // Rediriger avec un message de succès
        return redirect()->back()->with('success', 'Filière modifiée avec succès.');
    }

    // Supprimer une filière
    public function suprimer_filieres($id)
    {
        $filiere = filiere::findOrFail($id);
        $filiere->delete();

        return redirect()->back()->with('success', 'Filière supprimée avec succès');
    }
    public function ajouter_emploidetemepss(Request $request)
    {
        // Validation des données entrées par l'utilisateur
        $request->validate([
            'titre' => 'required',
            'pdf' => 'required|mimes:pdf',
            'filiere_id' => 'required|exists:filieres,id',
        ]);

        // Traitement du fichier PDF
        $pdf = $request->file('pdf');
        $pdfName = time() . '_' . $pdf->getClientOriginalName();
        $pdf->move(public_path('assets/pdf/emploi_de_temps'), $pdfName);

        // Création d'un nouvel emploi de temps
        emploi_de_temps::create([
            'titre' => $request->titre,
            'pdf' => $pdfName,
            'id_emploi_filiere' => $request->filiere_id,
        ]);

        return redirect()->route('admin.emploidetemepss.index')->with('success', 'Emploi de temps ajouté avec succès');
    }

    // Méthode pour modifier un emploi de temps
    public function modifier_emploidetemeps(Request $request, $id)
    {
        // Validation des données entrées par l'utilisateur
        $request->validate([
            'titre' => 'required',
            'pdf' => 'nullable|mimes:pdf',
            'filiere_id' => 'required|exists:filieres,id',
        ]);

        $emploi_de_temps = emploi_de_temps::findOrFail($id);

        // Mise à jour des champs modifiables
        $emploi_de_temps->titre = $request->titre;
        $emploi_de_temps->id_emploi_filiere = $request->filiere_id;

        // Vérification et mise à jour du fichier PDF s'il est fourni
        if ($request->hasFile('pdf')) {
            $pdf = $request->file('pdf');
            $pdfName = time() . '_' . $pdf->getClientOriginalName();
            $pdf->move(public_path('assets/pdf/emploi_de_temps'), $pdfName);
            $emploi_de_temps->pdf = $pdfName;
        }

        $emploi_de_temps->save();

        return redirect()->route('admin.emploidetemepss.index')->with('success', 'Emploi de temps modifié avec succès');
    }

    // Méthode pour supprimer un emploi de temps
    public function suprimer_emploidetemepss($id)
    {
        $emploi_de_temps = emploi_de_temps::findOrFail($id);
        $emploi_de_temps->delete();

        return redirect()->route('admin.emploidetemepss.index')->with('success', 'Emploi de temps supprimé avec succès');
    }


        public function affcher_emploidetemepss()
        {
            $emplois_de_temps = DB::table('emploi_de_temps')
            ->select('emploi_de_temps.id', 'emploi_de_temps.titre', 'emploi_de_temps.pdf', 'emploi_de_temps.id_emploi_filiere', 'filieres.titre as filiere_titre')
            ->join('filieres', 'emploi_de_temps.id_emploi_filiere', '=', 'filieres.id')
            ->get();

            // Retourner la vue avec les emplois de temps
            return view('admin.emploi_temps.index', ['emploisDeTemps' => $emplois_de_temps]);
        }

        // Autres méthodes du contrôleur...

        public function affcher_annonces()
        {
            $annonces = Annonce::select('id', 'titre', 'date_annonce', 'Description', 'Image')->get();
            return view('admin.annonce.index', ['annonces' => $annonces]);



        }
        public function suprimer_annonce($id)
        {
            $annonce = Annonce::findOrFail($id);
            $annonce->delete();

            return redirect()->back()->with('success', 'Annonce supprimée avec succès');
        }
    // Function to add a new annonce
    public function ajouter_annonces(Request $request)
    {
        // Validate request data
        $validatedData = $request->validate([
            'titre' => 'required|string',
            'date_annonce' => 'required|date',
            'Description' => 'required|string',
            'Image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4000',
        ]);

        // Initialize new Annonce instance
        $annonce = new Annonce();
        $annonce->titre = $request->titre;
        $annonce->date_annonce = $request->date_annonce;
        $annonce->Description = $request->Description;

        // Handle image upload if provided
        if ($request->hasFile('Image')) {
            $image = $request->file('Image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/image/annonce'), $imageName);
            $annonce->Image = $imageName;
        }

        // Save the annonce
        $annonce->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Annonce ajoutée avec succès.');
    }

    // Function to update an existing annonce
    public function modifier_annonce(Request $request, $id)
    {
        $annonce = Annonce::findOrFail($id);

        // Validate request if needed
        $validatedData = $request->validate([
            'titre' => 'required|string',
            'date_annonce' => 'required|date',
            'Description' => 'required|string',
            'Image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:4000',
        ]);

        // Update the annonce
        $annonce->titre = $request->titre;
        $annonce->date_annonce = $request->date_annonce;
        $annonce->Description = $request->Description;

        // Handle image upload if provided
        if ($request->hasFile('Image')) {
            $image = $request->file('Image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/image/actualite'), $imageName);
            $annonce->Image = $imageName;
        }

        $annonce->save();

        return redirect()->back()->with('success', 'Annonce updated successfully');
    }
    public function affcher_contact()
    {
        $contacts = contact::all(); // Retrieve all contacts
        return view('admin.contact.index', ['contacts' => $contacts]);
    }

    public function suprimer_contact($id)
    {
        $contact = contact::findOrFail($id); // Find the contact by ID
        $contact->delete(); // Delete the contact
        return redirect()->back()->with('success', 'Contact supprimé avec succès');
    }
}
