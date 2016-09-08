<?php namespace GestorImagenes\Http\Controllers;

class PictureController extends Controller {

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
		return 'mostrando fotos usuario';
	}
	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getCreatePicture()
	{
		return 'formulario de crear fotos';
	}

	public function postCreatePicture(){
		return 'almacenando foto en la db';
	}

	public function getUpdatePicture()
	{
		return 'formulario de actualizar foto';
	}

	public function postUpdatePicture(){
		return 'actuzalizar foto';
	}

	public function getDeletePicture()
	{
		return 'formulario de eliminar foto';
	}

	public function postDeletePicture(){
		return 'eliminar foto';
	}

	/*Lo saque del archivo controller de la carpeta vendor*/
	public function missingMethod($parameters = array())
	{
		abort(404);
	}
}
