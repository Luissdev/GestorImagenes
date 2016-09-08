<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use GestorImagenes\Album;
use GestorImagenes\Picture;
use GestorImagenes\User;

class PictureSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$album = Album::all();

		foreach ($album as $albm) {
			$cantidad = mt_rand(0,5);
			for ($i=0; $i < $cantidad; $i++) { 
				Picture::create([
					'nombre'=> "Nombre foto $i",
					'description'=> "Descripcion foto $i",
					'ruta'=>'img/text.png',
					'album_id'=>$albm->id
					]);
			}
		}
	}

}
