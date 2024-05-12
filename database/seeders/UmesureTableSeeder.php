<?php

namespace Database\Seeders;

use App\Models\Umesure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UmesureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Umesure::factory(1)->create();

        $ml = new \stdClass();
        $ml->en = 'ml';
        $ml->fr = 'ml';

        $l = new \stdClass();
        $l->en = 'L';
        $l->fr = 'L';

        $oz = new \stdClass();
        $oz->en = 'Oz';
        $oz->fr = 'Oz';

        $g = new \stdClass();
        $g->en = 'g';
        $g->fr = 'g';

        $mg = new \stdClass();
        $mg->en = 'mg';
        $mg->fr = 'mg';

        $kg = new \stdClass();
        $kg->en = 'Kg';
        $kg->fr = 'Kg';

        $livre = new \stdClass();
        $livre->en = 'lb';
        $livre->fr = 'lb';

        $arrayUmesure = [
            $ml,
            $l,
            $oz,
            $g,
            $mg,
            $kg,
            $livre
        ];

        foreach ($arrayUmesure as $el) {

            Umesure::create([
                "nom" => $el
            ]);
        }

    }


}
