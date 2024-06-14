<?php

namespace App\Http\Controllers;

use App\Events\RecetteCreated;
use App\Http\Requests\StoreRecettesRequest;
use App\Http\Requests\UpdateRecettesRequest;
use App\Models\Recette;
use App\Models\Ingredient;
use App\Models\Category;
use App\Models\Umesure;
use App\Models\User;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use App\Events\NewMessage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Pagination\Paginator;


class RecetteController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $message = 'Ça marche!';
        event(new NewMessage($message));
        
        //On récupère le queryString de la requête donc de l'url Ex: www.patate.com?tri=nom&direction=asc
        $tri = $request->query('tri', 'nom');
        $direction = $request->query('direction', 'asc');
        $category = $request->query("category");
        
        $recetteQuery = Recette::query();
        if ($category)
        {
            $recetteQuery->where('category_id', $category);
        }

        
        $recetteQuery->orderBy($tri, $direction);
       
        

        $this->recettes = $recetteQuery->simplePaginate(8)->withQueryString();

        //Retourner toutes les catégories pour la boucle du filtre Catégorie
        $this->categories = Category::All();

        return view('recette.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->categories = Category::all();
        return view('recette.create', $this->data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRecettesRequest $request)
    {
        // Initialiser le tableau au cas où il n'y aurait pas d'image
        $this->recette = [];
        if ($request->image) {
            $path = $request->image->store("images", "public");
            $this->recette = ['image' => $path];
        }
        $this->recette += [
            'titre' => $request->titre,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'temps_cuisson' => $request->temps_cuisson,
            'temps_preparation' => $request->temps_preparation,
            'user_id' => 1
        ];
        $this->recette = Recette::create($this->recette);

        // Récupérer les unités de mesures afin de la afficher dans le formulaire
        $this->uMesures = Umesure::all();

        return view('recette.add-ingredient', $this->data );

    }

    /**
     * Display the specified resource.
     */
    public function show(Recette $recette, Request $request)
    {
        $this->recette = Recette::find($recette->id);
        $this->category = Category::find($recette->category_id);
        $this->auteur = User::find($recette->user_id)->name;

        return view('recette.show', $this->data);
       

        // Différentes façon d'obtenir les ingrédients
        // 1.
        foreach ($recette->ingredients as $ingredient) {
            // ...
        }

        //2.1 (Ordre alphabétique)
        $ingredients = Recette::find(1)->ingredients()->orderBy('name')->get();

        //2.2 (2e argument: Ordre que l'on choisit en )
        return $this->belongsToMany(Ingredient::class, 'ingredient_recette');

        //
        /**
         * 2.3 (33 is the 
         * foreign key name of the model on which you are defining the relationship
         * 4th Arg: foreign key name of the model that you are joining to
         */
        return $this->belongsToMany(Ingredient::class, 'ingredient_recette', 'recette_id', 'ingredient_id');



    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recette $recette)
    {
        $this->recette = Recette::find($recette->id);
        $this->category = Category::find($recette->category_id);
        $this->auteur = User::find($recette->user_id)->name;

        $this->categories = Category::all();
        $this->auteurs = User::all();

        return view('recette.edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRecettesRequest $request, Recette $recette)
    {
        $category = $request->category;
        $recette = Recette::find($recette->id);
        $recette->titre = $request->titre;
        $recette->description = $request->description;
        $recette->category_id = $request->category_id;
        $recette->temps_cuisson = $request->temps_cuisson;
        $recette->temps_preparation = $request->temps_preparation;
        $recette->user_id = 1;

        $recette->update([
            'category' => $category,
            'titre' => $recette->titre,
            'description' => $recette->description,
            'temps_cuisson' => $recette->temps_cuisson,
            'temps_preparation' => $recette->temps_preparation,
        ]);

        return redirect()->route('recette.edit', $recette->id)->with('success', 'Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recette $recette)
    {
        // dd($recette);
        $recette->delete();
        return redirect()->route("recette.index")->with("success", "La recette a été supprimés");
    }

    public function pdf(Recette $recette)
    {
        $qrCode = QrCode::size(200)->generate(route('recette.show', $recette->id));
        $pdf = new Dompdf();
        $pdf->setPaper('letter', 'portrait');
        $pdf->loadHtml(view('recette.show-pdf', ["recette" => $recette, "qrCode" => $qrCode]));
        $pdf->render();
        return $pdf->stream('recette.pdf');
    }
}
