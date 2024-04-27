<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{


    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $genericObject = new  \stdClass();
        $genericObject->en = 'Desert';
        $genericObject->fr = 'Dessert';

        $plat = new  \stdClass();
        $plat->en = 'Main Dishes';
        $plat->fr = 'Repas principal';

        $lunch = new  \stdClass();
        $lunch->en = 'Lunch';
        $lunch->fr = 'Diner';

        $dinner = new  \stdClass();
        $dinner->en = 'Dinner';
        $dinner->fr = 'Souper';

        $collation = new  \stdClass();
        $collation->en = 'Main Dishes';
        $collation->fr = 'Repas principal';

        $apero = new  \stdClass();
        $apero->en = 'Apero';
        $apero->fr = 'Apero';

        $dejeuner = new  \stdClass();
        $dejeuner->en = 'Breakfast';
        $dejeuner->fr = 'Déjeuner';

        $arrayCategory = [
            $genericObject, $plat, $lunch, $dinner, $collation, $apero, $dejeuner
        ];
/*         if (!isset($i)) $i = 1;
        function ($i) {
            $i++;
        }; */

        // $i n'augmente pas de valeur... changer manuellement la valeur et repasser le php artisan db:seed
        $i = 6;
        return [
            'category' => [$arrayCategory[$i]],
        ];
    }
}
