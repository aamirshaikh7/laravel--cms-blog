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
			'name' => 'John doe',
			'email' => 'johndoe@gmail.com',
			'password' => bcrypt('password'),
			'admin' => 1,

		]);

		App\Profile::create([
			'user_id' => $user->id,
			'avatar' => 'uploads/avatars/1.png',
			'about' => 'sdadashdasnjdaaaaaaaaaaaaaa sdsaajhbhd dabssssssssss bdsahdbsad hsadddd adssamdnas',
			'facebook' => 'facebook.com',
			'youtube' => 'youtube.com',
			'instagram' => 'instagram.com',
			'github' => 'github.com',
			'linkedin' => 'linkedin.com'
		]);
    }
}
