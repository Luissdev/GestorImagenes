<?php namespace GestorImagenes\Http\Controllers;

class UserController extends Controller {

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


/* 	public function getIndex(){
 		return 'nadamas estoy calandole';
 	}*/
	public function getEditProfile(){
		return 'mostrando formulario';
	}

	public function postEditProfile(){
		return 'generando actualizacion de perfil';
	}

	/*Lo saque del archivo controller de la carpeta vendor*/
	public function missingMethod($parameters = array())
	{
		abort(404);
	}
}
