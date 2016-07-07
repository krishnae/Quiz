<?php

use Illuminate\Database\Seeder;

class AnswerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answer')->insert([
            'value' => 'php artisan controller controllername',
            'question_id' => 1
        ],[
            'value' => 'php artisan controller controllername',
            'question_id' => 1
        ]);
    }
}
