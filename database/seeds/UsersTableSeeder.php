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
        $users = App\User::create([
            'name' => 'Ashique Rashad',
            'email' => 'ashique@gmail.com',
            'password' => bcrypt('password'),
            'admin' => 1
        ]);

        App\Profile::create([

            'user_id' => $users->id,
            'avatar' => 'uploads/avatars/graduate.png',
            'about' => 'My Name is Ashique Rashad. I am full stack web developer',
            'facebook' => 'facebook',
            'youtube' => 'youtube'

        ]);
    }
}
