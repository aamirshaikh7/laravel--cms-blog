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
        	'site_name' => 'CMS BLOG',
        	'address' => 'India, Mumbai',
        	'contact_number' => '123456789',
        	'contact_email' => 'info@cmsblog.com'
        ]);
    }
}
