<?php namespace GestorImagenes\Http\Controllers;

use GestorImagenes\Http\Requests\EditProfileRequest;
use Illuminate\Support\Facades\Auth;
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
 		return view('user.update');
 	}

 	public function postEditProfile(EditProfileRequest $request){
 		$user = Auth::user();
 		$name = $request->get('name');
 		$user->name = $name;

 		if ($request->has('password')) {
 			$user->password = bcrypt($request->get('password'));
 		}

 		if ($request->has('question')) {
 			$user->question = $request->get('question');
 			$user->answer = $request->get('answer');
 		}

 		$user->save();
 		return redirect('/validated')->with('updated'. 'Su perfil ha sido actualizado');
 	}

 	/*Lo saque del archivo controller de la carpeta vendor*/
 	public function missingMethod($parameters = array())
 	{
 		abort(404);
 	}
 }
