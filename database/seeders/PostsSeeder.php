<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // factory(App\Post::class, 50)->create();
        \App\Models\Post::factory()->count(30)->create(); 

    }
}
