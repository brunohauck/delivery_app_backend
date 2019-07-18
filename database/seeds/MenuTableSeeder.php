<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,20) as $index) {
            DB::table('menus')->insert([
                'name' => $faker->company,
                'ingredientes' => $faker->sentence($nbWords = 20, $variableNbWords = true),
                'price' => 15.00,
                'img_url' => "https://www.guiadasemana.com.br/contentFiles/image/2018/02/FEA/principal/52618_w840h0_1518708939prato-feito.jpg",
                'restaurante_id' => 1
            ]);
        }
    }
}
