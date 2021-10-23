<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('\TCG\Voyager\Models\Post');
        for($i = 1 ; $i <= 10 ; $i++){
            DB::table('posts')->insert([
                'author_id' => 1,
                'category_id' => rand(1, 3),
                'title' => $faker->sentence(rand(2, 9)),
                'body' => $faker->sentence(rand(15, 115)),
                'slug' => $faker->slug(rand(2,6)),
                'status' => 'PUBLISHED',
                'featured' => 1,
                'image'=>$faker->image('public/storage',640,480, null, false),
            ]);
        }
    }
}
