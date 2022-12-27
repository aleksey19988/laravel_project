<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 2; $i++) {
            DB::table('posts')->insert([
                'title' => Str::random(10),
                'content' => Str::random(300),
                'likes' => rand(0, 50),
                'is_published' => true,
            ]);
        }
    }
}
