<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use GestorImagenes\Album;
use GestorImagenes\Picture;
use GestorImagenes\User;

class UsersSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		for ($i=0; $i < 50; $i++) { 
			User::create(
				[
				'name'=>"usuario$i",
				'email'=>"email$i@test.com",
				'password'=>bcrypt("pass$i"),
				'pregunta'=>"pregunta$1",
				'respuesta'=>"respuesta$1"
				]);
		}
	}

}
