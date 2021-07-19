<?php

use App\Pack;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 12; $i++) {
            $new = new Pack();
            $new->pack_name = $faker->company();
            $new->img = 'https://picsum.photos/400/200';
            $new->description = $faker->paragraph(5, false);
            $new->price = $faker->randomFloat(2, 80, 100000);
            $new->save();
        }
    }
}