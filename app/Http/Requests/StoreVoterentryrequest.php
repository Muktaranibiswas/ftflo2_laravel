<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreVoterentryrequest extends Request {

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
            'voter_name' => ['required', 'min:5'],
            'voter_id' => ['required', 'min:13'],
		];
	}

}
