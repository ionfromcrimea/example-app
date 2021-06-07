<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 30; $i++)
            DB::table('posts')->insert([
                'category_id' => rand(1,10),
                'title' => 'Post_'.$i,
                'description' => 'Description of post '.$i,
                'text' => '<p>Text of post '.$i.'</p>',
                'slug' => 'post-'.$i,
            ]);
    }
}
