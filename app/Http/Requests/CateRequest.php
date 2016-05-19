<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CateRequest extends Request {

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
			'name'=>'required|unique:cates,name',
			'order'=>'required',
			'description'=>'required'
		];
	}
	public function message(){
		return [
			'name.required'=>'Mời bạn nhập vào tên loại',
			'name.unique'=>'Tên này đã tồn tại',
			'order.required'=>'Mời bạn nhập vào thứ tự',
			'description.required'=>'Mời bạn nhập vào mô tả'
		];
	}

}
