<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Author;
class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) { // Creating 50 posts just for example.
            Author::create([
                
                'ten_tgia' => $faker->text(rand(10, 20)),
                'hinh_tgia' => $faker->imageUrl($width = 640, $height = 480),
            ]);
    }
}}
