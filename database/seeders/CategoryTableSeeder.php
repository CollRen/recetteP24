<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(1)->create();

        $genericObject = new \stdClass();
        $genericObject->en = 'Desert';
        $genericObject->fr = 'Dessert';

        $plat = new \stdClass();
        $plat->en = 'Main Dishes';
        $plat->fr = 'Repas principal';

        $lunch = new \stdClass();
        $lunch->en = 'Lunch';
        $lunch->fr = 'Diner';

        $dinner = new \stdClass();
        $dinner->en = 'Dinner';
        $dinner->fr = 'Souper';

        $collation = new \stdClass();
        $collation->en = 'Collation';
        $collation->fr = 'Collation';

        $apero = new \stdClass();
        $apero->en = 'Apero';
        $apero->fr = 'Apéro';

        $dejeuner = new \stdClass();
        $dejeuner->en = 'Breakfast';
        $dejeuner->fr = 'Déjeuner';

        $arrayCategory = [
            $genericObject,
            $plat,
            $lunch,
            $dinner,
            $collation,
            $apero,
            $dejeuner
        ];

        foreach ($arrayCategory as $el) {

            Category::create([
                "category" => $el
            ]);
        }

    }


}
