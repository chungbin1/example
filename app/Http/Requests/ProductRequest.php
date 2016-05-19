<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request {

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
			'name'=>'required',
			'image'=>'required',
			'cate_id'=>'required',
			'links'=>'required',
			'price'=>'required',
			
		];
	}
	public function message(){
		return [
		'txtName.required'=>'Vui lòng nhập vào tên sản phẩm',
		'parent.required'=>'Vui lòng chọn loại sản phẩm',
		'txtName.unique'=>'Tên sản phẩm đã tồn tại',
		'fImages.required'=>'Hình ảnh không được bỏ trống'
		];
	}

}
