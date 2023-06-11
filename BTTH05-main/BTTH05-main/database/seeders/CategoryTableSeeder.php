<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Category;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) { // Creating 50 posts just for example.
            Category::create([
                
                'ten_tloai' => $faker->text(rand(10, 20)) // Generates 3random paragraphs.
 ]);
 }
        //
    }
}

