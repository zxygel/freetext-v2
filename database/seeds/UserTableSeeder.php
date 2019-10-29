<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('users')->insert([
        // 	'name' => Str::random(15), //make sure the number is less than the value of column
        // 	'email' => Str::random(15).'@'.Str::random(5).'.com',
        // 	'password' => bcrypt(Str::random(6))
        // ]);

        factory(User::class)->create()->each(function($u){
        	$u->profile()->save(factory(App\Profile::class)->make());
        });
    }
}
