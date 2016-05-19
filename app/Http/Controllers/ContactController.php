<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('trangchu.pages.contact');
	}
	public function postAdd(Request $request){
		$post=$request->all();
		$data=array(
			'name'=>$post['name'],
			'email'=>$post['email'],
			'phone'=>$post['phone'],
			'address'=>$post['address'],
			'content'=>$post['content']
			);
		$ch=Contact::insert($data);
		if($ch > 0){
				echo "<script type='text/javascript'>
				alert('Cảm ơn bạn đã đóng góp ý kiến! Chúng tôi sẽ liên hệ với bạn sớm nhất có thể!');
				window.location='";
				echo route('lienhe');
				echo "';
				</script>";
		}

	}
	public function getList(){
		$contact=Contact::select('id','name','email','phone','address','content')->orderBy('id','DESC')->get();
		return view('admin.contact.list',compact('contact'));
	}
	public function getDelete($id){
		Contact::find($id)->delete();
		return redirect()->route('admin.contact.getList')->with(['flash_level'=>'success','flash_message'=>'Bạn đã xóa thành công']);
		
	}
	public function getReply($id){
		$contact=Contact::find($id)->toArray();
		return view('admin.contact.reply',compact('contact'));
	}
	public function postReply(Request $request){
		$contact=new Contact();
		$data['name']=$contact->name=$request->name;
		$data['email']=$contact->email=$request->email;
		$data['reply']=$contact->reply=$request->reply;
		if($contact->save()){
			Mail::send('contact.mail',['data'=>$data],function($mail) use ($data){
				$mail->to($data['email'],$data['name']->from('tuytam.199x@gmail.com')->subject('Welcome'));

			});
		}
	}
}