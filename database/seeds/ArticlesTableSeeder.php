<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records
        \App\Article::truncate();

        $faker = \Faker\Factory::create();

        // Create some articles using faker
        for ($i = 0; $i < 50; $i++) {
            \App\Article::create([
                'title' => $faker -> sentence,
                'body' => $faker -> paragraph,
            ]);
        }

    }
}
