<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class MessageRequest extends Request {

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'email'=>'required',
			'subject'=>'required',
			'message'=>'required',
		];
	}

}
