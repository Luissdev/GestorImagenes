<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use GestorImagenes\Album;
use GestorImagenes\Picture;
use GestorImagenes\User;

class AlbumSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$user = User::all();

		foreach ($user as $usr) {
			$cantidad = mt_rand(0,15);
			for ($i=0; $i < $cantidad; $i++) { 
				Album::create([
					'nombre'=> "Album $i",
					'description'=> "Descripcion album $i",
					'user_id'=>$usr->id
					]);
			}
		}
	}
}
