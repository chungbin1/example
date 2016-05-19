<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Product;
use Input;
use DB;
use Excel;
class ExcelController extends Controller {

	public function export(){
		$export=Product::all();
		Excel::create('Export Data',function($excel) use($export){
			$excel->sheet('Sheet 1',function($sheet) use($export){
				$sheet->fromArray($export);
			});
		})->export('xlsx');
	}
	public function deleteAll(){
		DB::table('products')->delete();
		return redirect()->route('admin.product.getlist');
	}

}
