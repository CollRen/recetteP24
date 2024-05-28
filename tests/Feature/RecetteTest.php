<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Validation\Rules\ImageFile;
use Tests\TestCase;
use App\Models\Recette;

class RecetteTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();//Doit être la première ligne
        //Code ici
        $this->seed("CategoryTableSeeder");
        $this->seed("RecettesTableSeeder");

    }

    public function tearDown(): void
    {
        //Code ici
        parent::tearDown();//Doit être la dernière ligne
    }
    /**
     * Test de la route recette.index
     */
    public function test_recette_index_valid(): void
    {
        $response = $this->get(route("recette.index"));

        $response->assertViewHas("categories");//La vue contient les données quant aux catégories
        $response->assertViewHas("recettes");//La vue contient les données quant aux recettes

        $response->assertStatus(200);
    }

    public function test_index_contains_recette(): void
    {
        $response = $this->get(route("recette.index"));
        $recettesData = $response->original->getData()["recettes"];
        $this->assertGreaterThan(0, count($recettesData));
    }
    public function test_index_trier_temps_preparation(): void
    {
        $response = $this->get(route("recette.index", ["tri" => "temps_preparation", "direction" => "desc"]));
        $recettesData = $response->original->getData()["recettes"];
        $premier = $recettesData->first()->temps_preparation;
        $dernier = $recettesData->last()->temps_preparation;
        $this->assertGreaterThanOrEqual($dernier, $premier, "Pas tiguidou");

    }
    public function test_page_inconnue(): void
    {
        $response = $this->get("/sldkdfjsdlkfhlsdfj");
        $response->assertStatus(404);
    }

/*     public function test_recette_show(): void
    {
        $recette = Recette::first();
        $response = $this->get(route("recette.show", ["recette" => $recette->id]));
        //Terminer ici
    } */

/*     public function test_recette_create(): void
    {
        $response = $this->get(route("recette.create"));
        $response->assertElementExists("form");
        $response->assertElementExists("input[name='nom']");
        $response->assertElementExists("input[name='temps_preparation']");
        //Terminer ici
    } */

    /* public function test_recette_store(): void
    {
        $image = new ImageFile();
        
        $response = $this->post(route("recette.store", [
            "titre" => "RecetteTest4",
            "temps_preparation" => 10,
            "temps_cuisson" => 15,
            "description" => "Lorem ipsum",
            "image" => $image,
            "category_id" => 1
        ]));

        $response->assertStatus(302);
        $response->assertRedirect(route("recette.index"));

        //Cleanup manuel
        // Recette::orderByDesc("id")->first()->delete();

    } */

}
