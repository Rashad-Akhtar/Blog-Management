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

            'site_name' => "Rashad's Blog",
            'contact_email' => 'info@laravel.com',
            'contact_number' => '2937898574895',
            'address' => 'Dhaka,Bangladesh'
            
        ]);
    }
}
