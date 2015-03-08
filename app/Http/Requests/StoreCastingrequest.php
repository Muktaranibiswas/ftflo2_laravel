<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreCastingrequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return True;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
            'voter_id' => ['required', 'min:5'],
            'select_candidate' => ['required', 'min:3'],
		];
	}

}
