<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Album;

use Faker\Factory as Faker;
use Faker\Provider\en_US\Person;

class MusicAlbum extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for($i=0; $i<=10; $i++){

            $album = new Album();
            $album->titolo = $faker->words(3, true);
            $album->genere = $faker->randomElement(['Funk', 'Rock', 'Kpop', 'Neomelodica', 'Rap']);   
            $album->autore = $faker->name();
            $album->prezzo = $faker->randomFloat(2, 5, 99);
            $album->anno  =  $faker->year();

            $album->save();
            
        }
    }
}
