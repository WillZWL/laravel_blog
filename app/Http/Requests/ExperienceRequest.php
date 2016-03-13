<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ExperienceRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return false;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'name' => 'required|min:2',
			'description' => 'required|min:2',
			'date' => 'required|min:2'
		];
	}

}
