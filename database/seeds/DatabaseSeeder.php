<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use GestorImagenes\Album;
use GestorImagenes\Picture;
use GestorImagenes\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
/*		Model::unguard();
*/
		DB::statement("SET FOREIGN_KEY_CHECKS=0");

		Picture::truncate();
		Album::truncate();
		User::truncate();

		$this->call('UsersSeeder');
		$this->call('AlbumSeeder');
		$this->call('PictureSeeder');
	}

}
