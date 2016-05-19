<?php namespace App\Http\Controllers;
use Sunra\PhpSimple\HtmlDomParser;
use App\Product;
class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}
	// Truemart
	public function Sanpham(){
		ini_set('memory_limit', '-1');
		ini_set('max_execution_time', 3000);
		$link='http://www.truesmart.com.vn/dien-thoai/';
		$html = HtmlDomParser::file_get_html( $link );
		$data= array();
		foreach($html->find('#content .menucat a ') as $links){
			
		  $data['title']=strip_tags($links->outertext);
		  $data['title']=$this->getList($links->href);
		}
	}

	public function getList($link){
		  $html = HtmlDomParser::file_get_html( $link );
		  $link=[];
		  foreach($html->firstChild()->find(' .title a') as $links )
		  { 
		    $link[]=$links->href;
		  }
		  $data = array();
		  if(count($link)){
		    foreach ($link as $k => $v) {
		      $data[] = $this->Detail($v);
		      if($k ==10){
		        break;
		      }
		    }
		  }
	}

	public function Detail($link){
		  $html = HtmlDomParser::file_get_html( $link );
		  $title = $html->find('.product_info .producttt', 0)->plaintext;
		  $price = $html->find('.pi_price .pip_price', 0)->plaintext;
		  $description=array();
		  foreach($html->find('.sanpham .product_info .pi_arrow') as $li){
		    $description[]=$li->outertext;
		  }
		  $images = array();
		  foreach($html->find('.image img') as $img)  {
		        $urlArray = explode('/', $img->src);
		        $tmpPath = 'resources/upload/'.end($urlArray);
		        $tmpImg = file_get_contents($img->src);
		        file_put_contents($tmpPath, $tmpImg);
		        $images = $tmpPath;
  }
  		if(strpos($link,'motorola')){
				$cate_id = 19;
			}
			elseif(strpos($link,'nokia')){
				$cate_id = 13;
			}
			elseif(strpos($link,'samsung')){
				$cate_id = 12;
			}
			elseif(strpos($link,'apple')){
				$cate_id = 14;
			}
			elseif(strpos($link,'lg')){
				$cate_id = 15;
			}
			elseif(strpos($link,'fpt')){
				$cate_id = 23;
			}
			elseif(strpos($link,'blackberry')){
				$cate_id = 16;
			}
			elseif(strpos($link,'oppo')){
				$cate_id = 17;
			}
			elseif(strpos($link,'sony')){
				$cate_id = 18;
			}
			elseif(strpos($link,'kashi')){
				$cate_id = 23;
			}
			elseif(strpos($link,'htc')){
				$cate_id = 20;
			}
			else{
				$cate_id=23;
			}
  		$des=implode(" ",$description);
  		$home=$html->find('#menu-res .mnhome a',0)->href;
	 	$data=array(
				  	'name'=>$title,
				  	'alias'=>changeTitle($title),
				  	'price'=>$price,
				  	'image'=>$images,
				  	'description'=>$des,
				  	'links'=>$home,
				  	'cate_id'=>$cate_id,
				  	'address'=>$link
				  	);
		  $ch=Product::insert($data);
	}




	// Pico
	public function Product(){
		ini_set('memory_limit', '-1');
		ini_set('max_execution_time', 3000);
		$link='http://pico.vn';
		$html = HtmlDomParser::file_get_html( $link );
		$data = array();
		foreach($html->find('.dropdown-menu') as $k => $links){
				foreach($html->find('li a strong') as $kt =>$t){
				$data[$k][$kt]['type'] = strip_tags($t->plaintext);
				}	
		foreach ($links->find(".popover-content ul li a") as $ka => $a) {
				$data[$k]['data'][$ka]['type'] = $a->getAttribute("title");
				$data[$k]['data'][$ka]['type1']=$link.$a->href;
				$data[$k]['data'][$ka]['data'] =$this->getListProductByCategory($link.$a->href);
				}
			exit();
		}
	}

	public function getListProductByCategory($link){
		$html=HtmlDomParser::file_get_html( $link );
		$link=array();
		foreach($html->find('.category-child .product-info a') as $links )
		{	
			$link[]=$links->href;
		}
		$data = array();
		if(count($link)){
			foreach ($link as $k => $v) {
				$data[] = $this->getProductDetail($v);
				if($k ==2){
					break;
				}
			}
		}
	}

	public function getProductDetail($link){
 		$html = HtmlDomParser::file_get_html( $link );
		$title = $html->find('#Home_ContentPlaceHolder_Product_Control_head_Title', 0)->plaintext;
		$price = $html->find('.sidebar-box-content .price', 0)->plaintext;
		$status=$html->find('.sidebar-box-content .upper',0)->plaintext;
		$params=array();
		  foreach($html->find('.iSpecial tr') as $param)  {
		    $params[] = $param->plaintext;
		  }
		  $images = array();
		  foreach($html->find('#product-slider .slides img') as $img)  {
		    $urlArray = explode('/', $img->src);
		    $tmpPath = 'resources/upload/'.end($urlArray);
		    $tmpImg = file_get_contents($img->src);
		    file_put_contents($tmpPath, $tmpImg);
		     if (file_exists($tmpPath)) {
		    	$images = $tmpPath;
		  } else {
		    echo "This file does not exist";
		  }
		  }
		  $home=$html->find('#logo a',0)->href;
		  $description=implode(" ",$params);
		  $data=array(
		  	'name'=>$title,
		  	'alias'=>changeTitle($title),
		  	'price'=>$price,
		  	'image'=>$images,
		  	'description'=>$description,
		  	'links'=>$home,
		  	'cate_id'=>1
		  	);
		  $ch=Product::insert($data);
	}
	public function check($url){
		$headers = @get_headers($url);
		if(strpos($headers[0],'404') === false)
		{
		  return true;
		}
		else
		{
		  return false;
		}
	}
	public function FPT_shop(){
		ini_set('memory_limit', '-1');
		ini_set('max_execution_time', 3000);
		$link='http://fptshop.com.vn/dien-thoai';
		$home='http://fptshop.com.vn/';
		$html=HtmlDomParser::file_get_html( $link );
		$data= array();
		foreach($html->find('.fshop-nsm-mobile .fshop-nsm-triple a') as $links){
		  $data['title']=strip_tags($links->outertext);
		  $data['title']=$this->getProductList($home.$links->href);
 		 }
		}
		public  function getProductList($link){ 
		$home='http://fptshop.com.vn/';
		$html=HtmlDomParser::file_get_html( $link );
		$link=array();
		foreach($html->find('.#category-products .p-item-bound .p-link-prod') as $links )
		{	
			$link[]=$home.$links->href;
		}
		$data = array();
		if(count($link)){
			foreach ($link as $k => $v) {
				$data[] = $this->ProductDetail($v);
				if($k ==12){
					break;
				}
			}
		}
		}
		public function ProductDetail($link){
			$html=HtmlDomParser::file_get_html( $link );
		  	$title = $html->find('.detail-top-left .box-name h1', 0)->plaintext;
		  	$price1 =$price=$html->find('.detail-price-status .detail-current-price strong', 0)->plaintext;
		  	if(isset($price1)){
		  		$price=$price1;
		  	}
		  	else{
		  		$price=0;
		  	}

		  	$params=array();
			  foreach($html->find('.left .detail-main-specification li') as $param)  {
			    $params[] = $param->outertext;
			  }
			  	$home='http://fptshop.com.vn/';
			  $images = array();
	  		foreach($html->find('.detail-main-image #default_image') as $img)  {
		    $urlArray = explode('/',$img->src);
		    $tmpPath = 'resources/upload/'.end($urlArray);
		    $tmpImg = file_get_contents($home.$img->src);
		    file_put_contents($tmpPath, $tmpImg);
		     if (file_exists($tmpPath)) {
		    	$images = $tmpPath;
		  } else {
		    echo "This file does not exist";
		  }
		  }

		  if(strpos($link,'motorola')){
				$cate_id = 19;
			}
			elseif(strpos($link,'nokia')){
				$cate_id = 13;
			}
			elseif(strpos($link,'samsung')){
				$cate_id = 12;
			}
			elseif(strpos($link,'iphone')){
				$cate_id = 14;
			}
			elseif(strpos($link,'lg')){
				$cate_id = 15;
			}
			elseif(strpos($link,'blackberry')){
				$cate_id = 16;
			}
			elseif(strpos($link,'oppo')){
				$cate_id = 17;
			}
			elseif(strpos($link,'sony')){
				$cate_id = 18;
			}
			elseif(strpos($link,'kashi')){
				$cate_id = 23;
			}
			elseif(strpos($link,'htc')){
				$cate_id = 20;
			}
			elseif(strpos($link,'vertu')){
				$cate_id = 23;
			}
			elseif(strpos($link,'mobell')){
				$cate_id=23;
			}
			elseif(strpos($link,'mobiistar')){
				$cate_id = 23;
			}
			elseif(strpos($link,'zte')){
				$cate_id = 23;
			}
			elseif(strpos($link,'wing')){
				$cate_id = 23;
			}
			elseif(strpos($link,'lenovo')){
				$cate_id = 21;
			}
			elseif(strpos($link,'philips')){
				$cate_id = 23;
			}
			elseif(strpos($link,'huawei')){
				$cate_id = 23;
			}
			elseif(strpos($link,'coolpad')){
				$cate_id = 23;
			}
			elseif(strpos($link,'masstel')){
				$cate_id = 23;
			}
			elseif(strpos($link,'asus')){
				$cate_id = 22;
			}
			elseif(strpos($link,'obi-worldphone')){
				$cate_id = 23;
			}
			
			else
			{
				$cate_id=16;
			}
			


	   		 $description=implode(" ",$params);
	   		 $data=array(
			  	'name'=>$title,
			  	'alias'=>changeTitle($title),
			  	'price'=>$price,
			  	'image'=>$images,
			  	'description'=>$description,
			  	'links'=>$home,
			  	'cate_id'=>$cate_id,
			  	'address'=>$link
			  	);
			  $ch=Product::insert($data);
			}
   	// /http://giahuymobile.vn/
			public function giahuymobile_Product(){
			ini_set('memory_limit', '-1');
			ini_set('max_execution_time', 3000);
			$link='http://giahuymobile.vn/dien-thoai/c1.html';
			$html=HtmlDomParser::file_get_html( $link );
			$data= array();
			$home='http://giahuymobile.vn/';
			foreach($html->find('.content_home .product_cat_title .title_sub ') as $links){
			  $data['title']=strip_tags($home.$links->outertext);
			  $data['title']=$this->giahuymobile_getList($home.$links->href);
	 		 }
			}

			public function giahuymobile_getList($link){
			$html=HtmlDomParser::file_get_html( $link );
			$link=array();
			$home='http://giahuymobile.vn/';
			foreach($html->find('.product_name a ') as $links )
			{	
				$link[]=$home.$links->href;
			}
			$data = array();
			if(count($link)){
				foreach ($link as $k => $v) {
					$data[] = $this->giahuymobile_Detail($v);
					if($k ==30){
						break;
					}
				}
			}
			}

			public function giahuymobile_Detail($link){
			$html=HtmlDomParser::file_get_html( $link );
		  	$title = $html->find('.product_detail_right h1', 0)->plaintext;
		  	$price =$price=$html->find('.price-product-box .big', 0)->plaintext;
		  	$params=array();
			  foreach($html->find('.detail_product_slide p') as $param)  {
			    $params[] = $param->outertext;
			  }
			  $description=implode(" ",$params);
			  	$home='http://giahuymobile.vn/';
			  $images = array();
	  		foreach($html->firstChild()->find('#slides .slide img') as $img)  {
		    $urlArray = explode('/',$img->src);
		    $tmpPath = 'resources/upload/'.end($urlArray);
		    $tmpImg = file_get_contents($home.$img->src);
		    file_put_contents($tmpPath, $tmpImg);
		     if (file_exists($tmpPath)) {
		    	$images = $tmpPath;
		  } else {
		    echo "This file does not exist";
		  }
		  if(strpos($link,'iphone')){
				$cate_id = 14;
			}
			elseif(strpos($link,'samsung')){
				$cate_id = 12;
			}
			elseif(strpos($link,'ss')){
				$cate_id = 12;
			}
			elseif(strpos($link, 'htc')){
				$cate_id=20;
			}
			elseif(strpos($link, 'sony')){
				$cate_id=18;
			}
			elseif(strpos($link, 'nokia')){
				$cate_id=13;
			}
			elseif(strpos($link, 'sky')){
				$cate_id=23;
			}
			elseif(strpos($link, 'lg')){
				$cate_id=15;
			}
		  }
		   $data=array(
			  	'name'=>$title,
			  	'alias'=>changeTitle($title),
			  	'price'=>$price,
			  	'image'=>$images,
			  	'description'=>$description,
			  	'links'=>$home,
			  	'cate_id'=>$cate_id,
			  	'address'=>$link
			  	);
			  $ch=Product::insert($data);

			}


			// http://sieuthismartphone.vn/
			public function SieuThi_Product(){
			ini_set('memory_limit', '-1');
			ini_set('max_execution_time', 3000);
			$link='http://sieuthismartphone.vn/category/dien-thoai-di-dong-id1';
			$html=HtmlDomParser::file_get_html( $link );
			$data= array();
			$home='http://sieuthismartphone.vn/';
			foreach($html->find('.category_subcat_contain .sub_cat_detail a') as $links){
			  $data['title']=strip_tags($home.$links->outertext);
			  $data['title']=$this->getListdidong($home.$links->href);
	 		 }
			}

			public function getListdidong($link){
			$html=HtmlDomParser::file_get_html( $link );
			$link=array();
			$home='http://sieuthismartphone.vn/';
			foreach($html->find('.product_info .product_name a ') as $links )
			{	
				$link[]=$home.$links->href;
			}
			$data = array();
			if(count($link)){
				foreach ($link as $k => $v) {
					$data[] =$this->didong_Detail($v);
					if($k ==20){
						break;
					}
				}
			}
			}

			public function didong_Detail($link){
				$html=HtmlDomParser::file_get_html($link);
			  	$title = $html->find('.info_product .detail_info h2', 0)->plaintext;
			  	$price=$html->find('.content_attribute .price b', 0)->plaintext;
			  	$params=array();
				  foreach($html->find('.hide  .description') as $param)  {
				    $params[] = $param->outertext;
				  }
				  $description=implode(" ",$params);
				  	$home='http://sieuthismartphone.vn';
				$images = array();
		  		foreach($html->find('.detail_images .image_main img') as $img)  {
			    $urlArray = explode('/',$img->src);
			    $tmpPath = 'resources/upload/'.end($urlArray);
			    $tmpImg = file_get_contents($home.$img->src);
			    file_put_contents($tmpPath, $tmpImg);
			     if (file_exists($tmpPath)) {
			    	$images = $tmpPath;
			  } else {
			    echo "This file does not exist";
			  }
			}
				if(strpos($link,'lg')){
				$cate_id = 15;
			}
			elseif(strpos($link,'samsung')){
				$cate_id = 12;
			}
			elseif(strpos($link, 'sony')){
				$cate_id=18;
			}
			elseif(strpos($link, 'sky')){
				$cate_id=23;
			}
			elseif(strpos($link, 'iphone')){
				$cate_id=14;
			}
			elseif(strpos($link, 'htc')){
				$cate_id=20;
			}
			elseif(strpos($link, 'oppo')){
				$cate_id=18;
			}
			elseif(strpos($link, 'asus')){
				$cate_id=22;
			}
			else{
				$cate_id=23;
			}
				 $data=array(
			  	'name'=>$title,
			  	'alias'=>changeTitle($title),
			  	'price'=>$price,
			  	'image'=>$images,
			  	'description'=>$description,
			  	'links'=>$home,
			  	'cate_id'=>$cate_id,
			  	'address'=>$link
			  	);
			  $ch=Product::insert($data);

		}



}
