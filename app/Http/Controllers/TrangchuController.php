<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use App\Cate;
use Illuminate\Support\Facades\Input;
use App\Banner;
class TrangchuController extends Controller {

	public function loaisanpham($tenloai,$id){
		$product=Product::select('id','name','alias','description','price','cate_id','image')->where('cate_id',$id)->paginate(12);
		$cate=Cate::select('id','name','parent_id')->where('id',$id)->first();
		$cate_name=Cate::select('id','name','parent_id')->where('id',$cate['parent_id'])->first();
		$name=Cate::select('id','name','parent_id','alias')->where('parent_id',$cate_name['id'])->get();
		$banner=Banner::select('name','images','links')->take(4)->skip(0)->get();
		return view('trangchu.pages.category',compact('product','cate','cate_name','name','banner'));
	}
	public function loaidanhmuc($tenloai,$id){
		$menu=Cate::where('id',$id)->first();
		$category=Cate::select('id','name','parent_id')->where('parent_id',$menu['id'])->first();
		$cate_name=Cate::select('id','name','parent_id')->where('parent_id',$category['id'])->first();
		$product=Product::where('cate_id',$cate_name['id'])->paginate(12);
		$banner=Banner::select('name','images','links')->take(4)->skip(0)->get();

		return view('trangchu.pages.danhmuc',compact('menu','category','cate_name','product','banner'));
	}
	
		public function chitiet($tensp,$id){
		$product=Product::select('id','name','alias','image','price','cate_id','description')->where('id',$id)->first();
		$cate=Cate::select('id','name','alias','parent_id')->where('id',$product['cate_id'])->first();
		$menu=Cate::select('id','name','alias')->where('id',$cate['parent_id'])->first();
		$product_last=Product::select('id','name','image','alias','price')->where('cate_id',$product['cate_id'])->take(10)->skip(1)->paginate(5);
		$banner=Banner::select('name','images','links')->take(3)->skip(0)->get();
		return view('trangchu.pages.chitiet',compact('product','cate','menu','product_last','banner'));
	}
	
	
	public function timkiem(){
		$name=Input::get('k');
		$search=Product::where('name','like','%'.$name.'%')->orderBy('name')->get();
		$banner=Banner::select('name','images','links')->take(4)->skip(0)->get();

		if(count($search)==0){
			return view('trangchu.pages.search')->with('message','Không tồn tại sản phẩm ')->with('search',$search)->with('name',$name)->with('banner',$banner);
		}
		else{

					return view('trangchu.pages.search',compact('name','search','banner'));

		}
	}
	public function noiban(){
		
	}
	
}
