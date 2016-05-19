<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Cate;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Product;
class ProductController extends Controller {

	public function getlist(){
		$data=Product::select('id','name','cate_id','price','created_at','image')->orderBy('id','DESC')->get()->toArray();
	return view('admin.product.list',compact('data'));
	}
	public function getAdd(){
		$cate=Cate::select('name','id','parent_id')->get()->toArray();
		return view('admin.product.add',compact('cate'));

	}
	public function postAdd(ProductRequest $request){
	$file_name=$request->file('image')->getClientOriginalName();
	$product=new Product();
	$product->name=$request->name;
	$product->alias=changeTitle($request->name);
	$product->price=$request->price;
	$product->description=$request->description;
	$product->image=$file_name;
	$product->links=$request->links;
	$product->cate_id=$request->cate_id;
	$request->file('image')->move('resources/upload/',$file_name);
	$product->save();
	return redirect()->route('admin.product.getlist')->with(['flash_level'=>'success','flash_message'=>'Bạn thêm thành công']);
		}

	public function getdelete($id){
		$product=Product::find($id);
		if(!is_null($product)){
			$product->delete();
		}
		return redirect()->route('admin.product.getlist')->with(['flash_level'=>'success','flash_message'=>'Bạn xóa thành công']);
		}
	public function getEdit($id){
		$cate=Cate::select('id','name')->get();
		$product=Product::find($id)->toArray();
		return view('admin.product.edit',compact('cate','product'));
	
	}
	public function postEdit(){
		
	}
	

}
