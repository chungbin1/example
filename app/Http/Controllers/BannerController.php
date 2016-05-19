<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\BannerRequest;
use Illuminate\Http\Request;
use App\Banner;


class BannerController extends Controller {

	public function getList(){
		$data=Banner::select('id','name','images','links')->orderBy('id','DESC')->get();
		return view('admin.banner.list',compact('data'));
	}
	public function getAdd(){
		return view('admin.banner.add');
	}
	public function postAdd(BannerRequest $request){
	$file_name=$request->file('images')->getClientOriginalName();
	$banner=new Banner();
	$banner->name=$request->name;
	$banner->images=$file_name;
	$banner->links=$request->links;
	$request->file('images')->move('resources/upload/banner',$file_name);
	$banner->save();
	return redirect()->route('admin.banner.getList')->with(['flash_level'=>'success','flash_message'=>'Bạn thêm thành công']);


	}
	public function getEdit($id){
		$banner=Banner::find($id)->toArray();
		return view('admin.banner.edit',compact('banner'));

	}
	public function postEdit(BannerRequest $request){
		$allrequest=$request->all();

		$name=$allrequest['name'];
		$links=$allrequest['links'];
		$id=$allrequest['id'];
		$banner=new Banner();
		$edit=$banner->find($id);
		$edit->name=$name;
		$edit->links=$links;
		$edit->save();
		return redirect()->route('admin.banner.getList')->with(['flash_level'=>'success','flash_message'=>'Bạn sửa thành công']);

	}
	public function getDelete($id){
		$banner=Banner::find($id);
		if(!is_null($banner)){
			$banner->delete();
		}
		return redirect()->route('admin.banner.getList')->with(['flash_level'=>'success','flash_message'=>'Bạn xóa thành công']);
	}
}
