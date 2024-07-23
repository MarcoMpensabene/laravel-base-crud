<?php

namespace Database\Seeders;

use App\Functions\Helpers;
use App\Models\Animal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use InvalidArgumentException;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        // for ($i = 0; $i < 5; $i++) {
        //     $animalList = new Animal();
        //     $animalList->name = $faker->firstName;
        //     $animalList->species = $faker->randomElement(['Dog', 'Cat', 'Bird', 'Fish', 'Reptile']);
        //     $animalList->breed = $faker->optional()->word;
        //     $animalList->image_url = $faker->optional()->imageUrl(640, 480, 'animals', true);
        //     $animalList->weight = $faker->optional()->randomFloat(2, 1, 100); // Peso tra 1 e 100 kg
        //     $animalList->description = $faker->optional()->paragraph;
        //     $animalList->save();
        // }  Faker Data for testing at first

        $animalList = Helpers::getCsvData(__DIR__ . "/../../resources/assets/animals.csv");
        foreach ($animalList as $index => $singleAnimal) {
            if ($index > 0) {
                $animalList = new Animal($singleAnimal);
                $animalList->name = $singleAnimal[1];
                $animalList->species = $singleAnimal[2];
                $animalList->breed = $singleAnimal[3];
                $animalList->image_url = $singleAnimal[4];
                $animalList->weight = $singleAnimal[5];
                $animalList->description = $singleAnimal[6];
                $animalList->created_at = $singleAnimal[7];
                $animalList->updated_at  = $singleAnimal[8];
                //dd($singleAnimal);
                $animalList->save();
            }
        }
    }
}