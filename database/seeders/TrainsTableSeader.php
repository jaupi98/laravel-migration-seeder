<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Faker\Provider\en_Us\Person;

use App\Models\Train;

class TrainsTableSeader extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10 ; $i++){


            $train = new Train();
            
            $train->azienda = $faker ->word();
            $train->stazione_partenza = $faker->word();
            $train->stazione_arrivo = $faker->word();
            $train->data_partenza = $faker->date();
            $train->data_arrivo = $faker->date();
            $train->orario_partenza = $faker->time();
            $train->orario_arrivo = $faker->time();
            $train->codice_treno = $faker->bothify('nt???##');
            $train->n_carrozze = $faker->numberBetween(1,15);
            $train->in_orario = $faker->boolean();
            $train->tempo_ritardo = $faker->time();
            $train->cancellato = $faker->boolean();
            
            //salvo l'istanza appena creata

            $train->save();

        }

    }
}
