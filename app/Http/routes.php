<?php

Route::get('home', 'HomeController@index');
Route::get('/admin',function(){
	return view('admin.master');
});
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
	Route::group(['prefix'=>'cate'],function(){
		Route::get('list',['as'=>'admin.cate.getList','uses'=>'CateController@getList']);
		Route::get('add',['as'=>'admin.cate.getAdd','uses'=>'CateController@getAdd']);
		Route::post('add',['as'=>'admin.cate.postAdd','uses'=>'CateController@postAdd']);
		Route::get('delete/{id}',['as'=>'admin.cate.getDelete','uses'=>'CateController@getDelete']);
		Route::get('edit/{id}',['as'=>'admin.cate.getEdit','uses'=>'CateController@getEdit']);
		Route::post('edit',['as'=>'admin.cate.postEdit','uses'=>'CateController@postEdit']);
	});
	Route::group(['prefix'=>'product'],function(){
		Route::get('list',['as'=>'admin.product.getlist','uses'=>'ProductController@getlist']);
		Route::get('add',['as'=>'admin.product.getAdd','uses'=>'ProductController@getAdd']);
		Route::post('add',['as'=>'admin.product.postAdd','uses'=>'ProductController@postAdd']);
		Route::get('edit/{id}',['as'=>'admin.product.getEdit','uses'=>'ProductController@getEdit']);
		Route::get('delete/{id}',['as'=>'admin.product.getdelete','uses'=>'ProductController@getdelete']);
		Route::post('edit',['as'=>'admin.product.postEdit','uses'=>'ProductController@postEdit']);
	});
	Route::group(['prefix'=>'user'],function(){
		Route::get('/list',['as'=>'admin.user.getList','uses'=>'UserController@getList']);
		Route::get('/add',['as'=>'admin.user.getAdd','uses'=>'UserController@getAdd']);
		Route::post('/add',['as'=>'admin.user.postAdd','uses'=>'UserController@postAdd']);
		Route::get('/edit/{id}',['as'=>'admin.user.getEdit','uses'=>'UserController@getEdit']);
		Route::post('/edit',['as'=>'admin.user.postEdit','uses'=>'UserController@postEdit']);
		Route::get('delete/{id}',['as'=>'admin.user.getDelete','uses'=>'UserController@getDelete']);
	});
	Route::group(['prefix'=>'contact'],function(){
		Route::get('/list',['as'=>'admin.contact.getList','uses'=>'ContactController@getList']);
		Route::get('delete/{id}',['as'=>'admin.contact.getDelete','uses'=>'ContactController@getDelete']);
		Route::get('reply/{id}',['as'=>'admin.contact.getReply','uses'=>'ContactController@getReply']);
		Route::post('reply',['as'=>'admin.contact.postReply','uses'=>'ContactController@postReply']);
	});
	Route::group(['prefix'=>'banner'],function(){
		Route::get('/list',['as'=>'admin.banner.getList','uses'=>'BannerController@getList']);
		Route::get('/add',['as'=>'admin.banner.getAdd','uses'=>'BannerController@getAdd']);
		Route::post('/add',['as'=>'admin.banner.postAdd','uses'=>'BannerController@postAdd']);
		Route::get('/edit/{id}',['as'=>'admin.banner.getEdit','uses'=>'BannerController@getEdit']);
		Route::post('/edit',['as'=>'admin.banner.postEdit','uses'=>'BannerController@postEdit']);
		Route::get('delete/{id}',['as'=>'admin.banner.getDelete','uses'=>'BannerController@getDelete']);
	});
});
Route::get('/admin/export',['as'=>'export','uses'=>'ExcelController@export']);
Route::get('/admin/product/deleteAll',['as'=>'deleteAll','uses'=>'ExcelController@deleteAll']);






Route::get('/',function(){
	$menu=DB::table('cates')->select('id','name','alias')->where('parent_id',0)->get();
	$menu1=DB::table('cates')->select('id','name','alias')->where('parent_id',0)->first();
	$cate1=DB::table('cates')->where('parent_id',$menu1->id)->first();
	$cate2=DB::table('cates')->where('parent_id',$cate1->id)->skip(0)->take(7)->get();
	return view('trangchu.pages.index',compact('menu','cate2'));
});
Route::get('/master',function(){
	
	return view('trangchu.master');
});
Route::get('/category',function(){
	return view('trangchu.pages.category');
});
Route::get('/tim-kiem-dm/{tenloai}/{id}',['as'=>'loaidanhmuc','uses'=>'TrangchuController@loaidanhmuc']);
Route::get('/tim-kiem/{tenloai}/{id}',['as'=>'loaisanpham','uses'=>'TrangchuController@loaisanpham']);
Route::get('tim-kiem',['as'=>'timkiem','uses'=>'TrangchuController@timkiem']);

Route::get('lien-he',['as'=>'lienhe','uses'=>'ContactController@index']);
Route::post('lien-he',['as'=>'postlienhe','uses'=>'ContactController@postAdd']);
Route::get('/chi-tiet/{tensp}/{id}',['as'=>'chitiet','uses'=>'TrangchuController@chitiet']);
Route::get('/test','WelcomeController@Sanpham');
Route::get('/pico','WelcomeController@Product');
Route::get('/fptshop','WelcomeController@FPT_shop');
Route::get('/ttmobile','WelcomeController@ttmobile_Product');
Route::get('/giahuy','WelcomeController@giahuymobile_Product');
Route::get('/dienthoaididong','WelcomeController@SieuThi_Product');


Route::get('autocomplete', function()
{
    return View::make('autocomplete');
});