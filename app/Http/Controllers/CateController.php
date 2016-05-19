<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CateRequest;
use Illuminate\Http\Request;
use App\Cate;
class CateController extends Controller {
	public function getList(){
		$data=Cate::select('id','name','parent_id')->orderBy('id','DESC')->get();
		return view('admin.cate.list',compact('data'));
	}

	public function getAdd(){
		$parent=Cate::select('id','name','parent_id')->get()->toArray();
		return view('admin.cate.add',compact('parent'));
	}
	public function postAdd(CateRequest $request){
		$cate=new Cate;
		$cate->name=$request->name;
		$cate->alias=changeTitle($request->name);
		$cate->order=$request->order;
		$cate->parent_id=$request->parent;
		$cate->description=$request->description;
		$cate->save();
		return redirect()->route('admin.cate.getList')->with(['flass_level'=>'success','flass_message'=>'Success!! Complete Add ']);
	}
	public function getEdit($id){
		$data=Cate::findOrFail($id)->toArray();
		$parent=Cate::select('id','name','parent_id')->get()->toArray();
		return view('admin.cate.edit',compact('parent','data','id'));
	}
	public function postEdit(Request $request,$id){
		$this->validate($request,
			['txtCateName'=>'required'],

			['txtCateName.required'=>'Mời bạn nhập vào tên loại']
			);
		$cate=Cate::find($id);
		$cate->name=$request->txtCateName;
		$cate->alias=changeTitle($request->txtCateName);
		$cate->order=$request->txtOrder;
		$cate->parent_id=$request->parent;
		$cate->description=$request->description;
		$cate->save();
		return redirect()->route('admin.cate.getList')->with(['flass_level'=>'success','flass_message'=>'Success!! Complete Edit ']);
	}
	public function getDelete($id){
		$parent=Cate::where('parent_id',$id)->count();
		if($parent==0){
		$cate=Cate::find($id);
		$cate->delete($id);
		return redirect()->route('admin.cate.getList')->with(['flass_level'=>'success','flass_message'=>'Success!!Complete Delete']);
	}
	else{
		echo "<script type='text/javascript'>
				alert('Sorry!!You can not Category');
				window.location='";
				echo route('admin.cate.getList');
				echo "';
				</script>";
	}

	}

}
