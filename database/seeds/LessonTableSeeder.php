<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
class LessonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('lessons')->insert([
        // 	'title' => Str::random(30), //make sure the number is less than the value of column
        // 	'content' => Str::random(15).'',
        // 	'featured_image' => Str::random(6),
        // 	'user_id' => User::all()->random()->id
        // ]);
        factory(\App\Lesson::class)->create();
    }
}