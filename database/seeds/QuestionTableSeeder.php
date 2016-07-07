<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('question')->insert([[
            'title' => 'How to create a controller in Laravel',
            'status' => 1,
            'answer_id' => 1,
        ],[
            'title' => 'How to create a controller in Laravel2',
            'status' => 1,
            'answer_id' => 1,
        ]]);
    }
}
