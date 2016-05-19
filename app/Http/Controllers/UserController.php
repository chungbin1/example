<?php namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
class UserController extends Controller {
	public function getList(){
		$user=User::select('id','username','email','level')->orderBy('id','DESC')->get()->toArray();
		return view('admin.user.list',compact('user'));
	}

	public function getAdd(){
		return view('admin.user.add');
	}
	public function postAdd(Request $request){
	$post=$request->all();
	$data=array(
		'username'=>$post['username'],
		'password'=>Hash::make($post['password']),
		'email'=>$post['email'],
		'level'=>$post['level'],
		'remember_token'=>$post['_token']
		);
	$ch=User::insert($data);
	if($ch>0){
		return redirect()->route('admin.user.getList')->with(['flash_level'=>'success','flash_message'=>'Bạn thêm thành công']);
	}
	else{
		return redirect()->route('admin.user.getList')->with(['flash_level'=>'success','flash_message'=>'Bạn thêm thất bại']);

	}

		// $user=new User();
		// $user->username=$request->username;
		// $user->password=Hash::make($request->password);
		// $user->email=$request->email;
		// $user->level=$request->level;
		// $user->remember_token=$request->_token;
		// $user->save();
		// return redirect()->route('admin.user.getList')->with(['flash_level'=>'success','flash_message'=>'Bạn thêm thành công']);

	}
	public function getEdit($id){
		$menu=User::find($id)->toArray();
		return view('admin.user.edit',compact('menu'));
	}
	public function postEdit(Request $request){
		$userAll=$request->all();
		$username=$userAll['username'];
		$password=Hash::make($userAll['password']);
		$email=$userAll['email'];
		$level=$userAll['level'];
		$remember_token=$userAll['_token'];
		$id=$userAll['id'];
		$user=new User();
		$edit=$user->find($id);
		$edit->username=$username;
		$edit->password=$password;
		$edit->email=$email;
		$edit->level=$level;
		$edit->remember_token=$remember_token;
		$edit->save();
		return redirect()->route('admin.user.getList')->with(['flash_level'=>'success','flash_message'=>'Bạn đã sửa thành công']);



	}
	public function getDelete($id){
		User::find($id)->delete();
		return redirect()->route('admin.user.getList')->with(['flash_level'=>'success','flash_message'=>'Bạn xóa thành công']);
	}

}
