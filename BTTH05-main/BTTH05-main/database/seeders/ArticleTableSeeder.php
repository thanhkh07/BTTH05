<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Article;
class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) { // Creating 50 posts just for example.
            Article::create([
                
                'tieude' => $faker->text(rand(10, 20)),
                'ten_bhat' => $faker->text(rand(10, 20)),
                'ma_tloai' => $faker->randomElement(DB::table('theloai')->pluck('ma_tloai')->toArray()),
                'tomtat'=> $faker->paragraphs(2,true),
                'noidung'=> $faker->paragraphs(5,true),
                'ma_tgia' => $faker->randomElement(DB::table('tacgia')->pluck('ma_tgia')->toArray()),
                'ngayviet' => $faker->date('Y-m-d'),
                'hinhanh' =>  $faker->imageUrl($width = 640, $height = 480),
                
            ]);
    }
}}