<?php namespace GestorImagenes\Http\Requests;

use GestorImagenes\Http\Requests\Request;

class EditProfileRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
		'name' => 'required',
		'password' => 'min:6|confirmed',
		'question' => '',
		'answer' => 'required_with:pregunta'
		];
	}

}
