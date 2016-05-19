<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
		public function run()
	{
		// Model::unguard();
		$this->call('CategorySeeder');


	}
}
	class CategorySeeder extends Seeder{
		public function run(){
			DB::table('cates')->insert([
			array('name'=>'Điện tử','alias'=>'dien-tu','order'=>1,'parent_id'=>0,'description'=>'Đây là hàng điện tử'),
			array('name'=>'Các loại tivi','alias'=>'tivi','order'=>1,'parent_id'=>1,'description'=>'Đây là các loại tivi'),
			array('name'=>'Tivi Samsung','alias'=>'tivi-samsung','order'=>1,'parent_id'=>2,'description'=>'Đây là Tivi Samsung'),
			array('name'=>'Tivi LG','alias'=>'tivi-lg','order'=>2,'parent_id'=>2,'description'=>'Đây là Tivi LG'),
			array('name'=>'Tivi Panasonic','alias'=>'tivi-panasonic','order'=>3,'parent_id'=>2,'description'=>'Đây là Tivi Panasonic'),
			array('name'=>'Tivi Sharp','alias'=>'tivi-sharp','order'=>4,'parent_id'=>2,'description'=>'Đây là Tivi Sharp'),
			array('name'=>'Tivi Sony','alias'=>'tivi-sony','order'=>5,'parent_id'=>2,'description'=>'Đây là Tivi Sony'),
			array('name'=>'Tivi TCL','alias'=>'tivi-TCL','order'=>6,'parent_id'=>2,'description'=>'Đây là Tivi TCL'),
			array('name'=>'Tivi Toshiba','alias'=>'tivi-toshiba','order'=>7,'parent_id'=>2,'description'=>'Đây là Tivi Toshiba'),

			array('name'=>'Điện thoại & Máy Tính Bảng','alias'=>'dien-thoai-may-tinh-bang','order'=>2,'parent_id'=>0,'description'=>'Đây là hàng điện thoại và máy tính bảng'),
			array('name'=>'Điện thoại di động','alias'=>'dien-thoai-di-dong','order'=>1,'parent_id'=>10,'description'=>'Đây là hàng di động'),
			array('name'=>'Điện thoại Samsung','alias'=>'dien-thoai-samsung','order'=>1,'parent_id'=>11,'description'=>'Đây là điện thoại Samsung'),
			array('name'=>'Điện thoại Nokia,Microsoft','alias'=>'dien-thoai-nokia-microsoft','order'=>2,'parent_id'=>11,'description'=>'Đây là điện thoại'),
			array('name'=>'Điện thoại Apple','alias'=>'dien-thoai-apple','order'=>3,'parent_id'=>11,'description'=>'Đây là điện thoại Apple'),
			array('name'=>'Điện thoại LG','alias'=>'dien-thoai-lg','order'=>4,'parent_id'=>11,'description'=>'Đây là điện thoại LG'),
			array('name'=>'Điện thoại BlackBerry','alias'=>'dien-thoai-blackberry','order'=>6,'parent_id'=>11,'description'=>'Đây là điện thoại BlackBerry'),
			array('name'=>'Điện thoại Oppo','alias'=>'dien-thoai-oppo','order'=>7,'parent_id'=>11,'description'=>'Đây là hàng điện thoại Oppo'),
			array('name'=>'Điện thoại Sony','alias'=>'dien-thoai-sony','order'=>8,'parent_id'=>11,'description'=>'Đây là điện thoại Sony'),
			array('name'=>'Điện thoại Motorola','alias'=>'dien-thoai-motorola','order'=>9,'parent_id'=>11,'description'=>'Đây là điện thoại Motorola'),
			array('name'=>'Điện thoại HTC','alias'=>'dien-thoai-htc','order'=>11,'parent_id'=>11,'description'=>'Đây là điện thoại HTC'),
			array('name'=>'Điện thoại Lenovo','alias'=>'dien-thoai-lenovo','order'=>17,'parent_id'=>11,'description'=>'Đây là điện thoại Lenovo'),
			array('name'=>'Điện thoại Asus','alias'=>'dien-thoai-asus','order'=>22,'parent_id'=>11,'description'=>'Đây là điện thoại Asus'),
			array('name'=>'Loại khác','alias'=>'loai-khac','order'=>22,'parent_id'=>11,'description'=>'Đây là điện thoại loại khác'),
// 24
			array('name'=>'Điện lạnh','alias'=>'dien-lanh','order'=>3,'parent_id'=>0,'description'=>'Đây là hàng điện lạnh'),
			array('name'=>'Điều hòa, máy lạnh','alias'=>'dieu-hoa-may-lanh','order'=>1,'parent_id'=>24,'description'=>'Đây là hàng điều hòa, máy lạnh'),
			array('name'=>'Điều hòa Panasonic','alias'=>'dieu-hoa-panasonic','order'=>1,'parent_id'=>25,'description'=>'Đây là hàng điều hòa'),
			array('name'=>'Điều hòa Daikin','alias'=>'dieu-hoa-daikin','order'=>2,'parent_id'=>25,'description'=>'Đây là hàng điều hòa'),
			array('name'=>'Điều hòa Electrolux','alias'=>'dieu-hoa-electrolux','order'=>3,'parent_id'=>25,'description'=>'Đây là hàng điều hòa'),
			array('name'=>'Điều hòa Gree','alias'=>'dieu-hoa-gree','order'=>4,'parent_id'=>25,'description'=>'Đây là hàng điều hòa'),
			array('name'=>'Điều hòa Toshiba','alias'=>'dieu-hoa-toshiba','order'=>5,'parent_id'=>25,'description'=>'Đây là hàng điều hòa'),
			array('name'=>'Điều hòa LG','alias'=>'dieu-hoa-lg','order'=>6,'parent_id'=>25,'description'=>'Đây là hàng điều hòa'),
			array('name'=>'Điều hòa Midea','alias'=>'dieu-hoa-midea','order'=>7,'parent_id'=>25,'description'=>'Đây là hàng điều hòa'),
			array('name'=>'Điều hòa Mitsubishi Electric','alias'=>'dieu-hoa-mitsubishi-electric','order'=>8,'parent_id'=>25,'description'=>'Đây là hàng điều hòa'),
//34
			array('name'=>'Thiết bị tin học','alias'=>'thiet-bi-tin-hoc','order'=>4,'parent_id'=>0,'description'=>'Đây là thiết bị tin học'),
			array('name'=>'Máy tính xách tay','alias'=>'may-tinh-xach-tay','order'=>1,'parent_id'=>34,'description'=>'Đây là thiết bị tin học'),
			array('name'=>'Máy tính để bàn','alias'=>'may-tinh-de-ban','order'=>1,'parent_id'=>34,'description'=>'Đây là thiết bị tin học'),
			array('name'=>'Màn hình máy tính','alias'=>'man-hinh-may-tinh','order'=>2,'parent_id'=>34,'description'=>'Đây là thiết bị tin học'),
			array('name'=>'Loa máy tính','alias'=>'loa-may-tinh','order'=>3,'parent_id'=>34,'description'=>'Đây là thiết bị tin học'),
			array('name'=>'Gaming','alias'=>'gaming','order'=>4,'parent_id'=>34,'description'=>'Đây là thiết bị tin học'),
			array('name'=>'Bộ lưu điện','alias'=>'bo-luu-dien','order'=>5,'parent_id'=>34,'description'=>'Đây là thiết bị tin học'),
//41

			array('name'=>'Âm thanh','alias'=>'am-thanh','order'=>5,'parent_id'=>0,'description'=>'Đây là thiết bị âm thanh'),
			array('name'=>'Thiết bị Karaoke','alias'=>'thiet-bi-karaoke','order'=>1,'parent_id'=>41,'description'=>'Đây là thiết bị âm thanh'),
			array('name'=>'Amply Karaoke','alias'=>'amply-karaoke','order'=>1,'parent_id'=>42,'description'=>'Đây là thiết bị âm thanh'),
			array('name'=>'Loa Karaoke','alias'=>'loa-karaoke','order'=>2,'parent_id'=>42,'description'=>'Đây là thiết bị âm thanh'),
			array('name'=>'Micro Karaoke','alias'=>'micro-karaoke','order'=>3,'parent_id'=>42,'description'=>'Đây là thiết bị âm thanh'),
			array('name'=>'Cassette','alias'=>'cassette','order'=>4,'parent_id'=>42,'description'=>'Đây là thiết bị âm thanh'),

//47
			array('name'=>'Kỹ thuật số','alias'=>'ky-thuat-so','order'=>6,'parent_id'=>0,'description'=>'Đây là thiết bị kỹ thuật số'),
			array('name'=>'Máy ảnh DSLR','alias'=>'may-anh-DSLR','order'=>1,'parent_id'=>47,'description'=>'Đây là thiết bị kỹ thuật số'),
			array('name'=>'Máy ảnh Canon','alias'=>'may-anh-canon','order'=>1,'parent_id'=>48,'description'=>'Đây là thiết bị kỹ thuật số'),
			array('name'=>'Máy ảnh Nikon','alias'=>'may-anh-nikon','order'=>2,'parent_id'=>48,'description'=>'Đây là thiết bị kỹ thuật số'),
			array('name'=>'Máy ảnh Sony','alias'=>'may-anh-sony','order'=>3,'parent_id'=>48,'description'=>'Đây là thiết bị kỹ thuật số'),
//52

			array('name'=>'Đồ gia dụng','alias'=>'do-gia-dung','order'=>7,'parent_id'=>0,'description'=>'Đây là đò gia dụng'),
			

//53
			array('name'=>'Xe điện','alias'=>'xe-dien','order'=>8,'parent_id'=>0,'description'=>'Đây là xe điện'),
			array('name'=>'Xe đạp, xe máy điện','alias'=>'xe-dap-xe-may-dien','order'=>1,'parent_id'=>53,'description'=>'Đây là xe điện'),
			array('name'=>'Xe đạp điện','alias'=>'xe-dap-dien','order'=>1,'parent_id'=>54,'description'=>'Đây là xe điện'),
			array('name'=>'Xe máy điện','alias'=>'xe-may-dien','order'=>2,'parent_id'=>54,'description'=>'Đây là xe điện'),
//57
			array('name'=>'Phụ kiện','alias'=>'phu-kien','order'=>9,'parent_id'=>0,'description'=>'Đây là phụ kiện'),
			array('name'=>'Phụ kiện Điện thoại và Máy tính bảng','alias'=>'phu-kien-dt-may-tinh','order'=>1,'parent_id'=>57,'description'=>'Đây là phụ kiện'),
			array('name'=>'Bao da, ốp lưng','alias'=>'bao-da-op-lung','order'=>1,'parent_id'=>58,'description'=>'Đây là phụ kiện'),
			array('name'=>'Loa Bluetooth','alias'=>'loa-bluetooth','order'=>2,'parent_id'=>58,'description'=>'Đây là phụ kiện'),
			array('name'=>'Thẻ nhớ','alias'=>'the-nho','order'=>3,'parent_id'=>58,'description'=>'Đây là phụ kiện'),
			array('name'=>'Sạc dự phòng','alias'=>'sac-du-phong','order'=>4,'parent_id'=>58,'description'=>'Đây là phụ kiện'),
			array('name'=>'Tai nghe','alias'=>'tai-nghe','order'=>5,'parent_id'=>58,'description'=>'Đây là phụ kiện'),
			array('name'=>'Tai nghe Bluetooth','alias'=>'tai-nghe-bluetooth','order'=>6,'parent_id'=>58,'description'=>'Đây là phụ kiện'),
			array('name'=>'Túi đựng','alias'=>'tui-dung','order'=>7,'parent_id'=>58,'description'=>'Đây là phụ kiện')

			]);
		}
	}


