<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([

        	'site_name'=>'Laravel\'s Blog',
        	'contact_email'=>'mohammadnawaz@laravel_blog.com',
        	'contact_number'=>'+91-123456789',
        	'address'=>'Hyderabad,India'
        ]);
    }
}
