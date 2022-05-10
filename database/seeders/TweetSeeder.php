<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class TweetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tweets')->insert([
            [
                'author' => 'Jamie Oliver',
                'content' => 'I use chili jam on my egg fried rice',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'author' => 'Steven He',
                'content' => 'I gave my child emotional damage',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],
            [
                'author' => 'Uncle Roger',
                'content' => 'Vegetable tastes like sad',
                'created_at' => Date::now(),
                'updated_at' => Date::now(),
            ],

        ]);
    }
}
