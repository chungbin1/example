<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $table='products';
	protected $fillable=['name','alias','price','image','description','links','cate_id','address'];
	public function cate(){
		return $this->belongTo('App\Cate');
	}

}
