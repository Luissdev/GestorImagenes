<?php namespace GestorImagenes\Http\Controllers;

class AlbumController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function getIndex(){
		return 'mostrando album de fotos';
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getCreateAlbum()
	{
		return 'formulario de crear albums';
	}

	public function postCreateAlbum(){
		return 'almacenando album en la db';
	}

	public function getUpdateAlbum()
	{
		return 'formulario de actualizar album';
	}

	public function postUpdateAlbum(){
		return 'actuzalizar album';
	}

		public function getDeleteAlbum()
	{
		return 'formulario de eliminar album';
	}

	public function postDeleteAlbum(){
		return 'eliminar album';
	}

	/*Lo saque del archivo controller de la carpeta vendor*/
	public function missingMethod($parameters = array())
	{
		abort(404);
	}

}
