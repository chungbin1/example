@extends('trangchu.master')

@section('nav')
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="{!! url('public/tinymce/tinymce.min.js') !!}"></script>
  <script>tinymce.init({ selector:'textarea' });</script>


<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
<style type="text/css">
    .example{
        margin: 20px;
    }
</style>


 <form class="form-horizontal" style="margin-top: 100px;" action="{!! route('postlienhe') !!}" method="post">
 <input type="hidden" name="_token" value="{!! csrf_token() !!}">
<fieldset>

<!-- Form Name -->
<legend style="text-align: center;">Liên Hệ</legend>

<div class="form-group">
  <label class="col-md-4 control-label" for="name">Họ tên</label>  
  <div class="col-md-5">
  <input id="name" name="name" type="text" placeholder="Nhập vào họ tên bạn" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="email">Email</label>  
  <div class="col-md-5">
  <input id="email" name="email" type="text" placeholder="Nhập vào Email" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="phone">Điện thoại</label>  
  <div class="col-md-5">
  <input id="phone" name="phone" type="text" placeholder="Nhập vào số điện thoại" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="address">Địa chỉ</label>  
  <div class="col-md-5">
  <input id="address" name="address" type="text" placeholder="Nhập vào địa chỉ của bạn" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="content">Nội dung</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="content" name="content"></textarea>
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-4">
    <button class="btn btn-primary">Xác nhận</button>
  </div>
</div>

</fieldset>
</form>

@stop