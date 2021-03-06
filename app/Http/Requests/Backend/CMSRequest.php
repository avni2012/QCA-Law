<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class CMSRequest extends FormRequest {
	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize() {
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() {
		return [
			'name' => 'required',
			'slug' => 'required|max:255|min:2|alpha_dash|unique:cms,slug,NULL,id,deleted_at,NULL',
			'content' => 'required',
			'status' => 'required|in:0,1',
		];
	}
}
