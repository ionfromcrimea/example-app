<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

//use Illuminate\Support\Facades\Hash;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++)
            DB::table('categories')->insert([
                'title' => 'Category_'.$i,
                'slug' => 'category-'.$i,
//            'password' => Hash::make('password'),
            ]);
    }
}
