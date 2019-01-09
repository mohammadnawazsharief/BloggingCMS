<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
        	'name' => 'Mohammad Nawaz',
        	'email'=> 'mohammadnawaz@gmail.com',
        	'password'=> bcrypt('123456'),
            'admin' => 1
        ]);
        App\Profile::create([
            'user_id' => $user->id,
            'avatar' =>'uploads/avatars/man.png',
            'about'=>'Lorem ipsum dolor sit amet,consectetura,sed  do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam',
            'facebook'=>'facebook.com',
            'youtube' => 'Youtube.com'

        ]);
    }
}
