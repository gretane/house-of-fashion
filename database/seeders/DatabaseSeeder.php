<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Str;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('users')->insert([
            'name' => 'DressMaker',
            'email' => 'dressmaker@gmail.com',
            'password' => Hash::make('password'),
        ]);
        $designersCount = 20;
        foreach(range(1, $designersCount) as $_) {
            DB::table('designers')->insert([
                'name' => $faker->firstName(),
                'surname' => $faker->lastName(),
            ]);
        }

        // $outfits = ['Blouse', 'Dress', 'Jeans', 'Pants', 'Shorts', 'Sweater', 'Jacket', 'Skirt', 'Shoes', 'Accessory', 'Suit'];

        // foreach(range(1, 150) as $_) {
        //     $randOutfit = $outfits[rand(0, count($outfits)-1)];

        //     DB::table('outfits')->insert([
        //         'type' => $randOutfit,
        //         'color' => $faker->safeColorName(),
        //         'size' => range(2, 50),
        //         'about' => $faker->paragraph(2),
        //         'designer_id' => rand(1, $designersCount),
        //     ]);
        // }
    }
}
