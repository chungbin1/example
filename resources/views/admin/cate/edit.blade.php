 @extends('admin.master')
@section('controller','Category')
@section('section','Edit')
    
@section('content')
<div class="col-lg-7" style="padding-bottom:120px">
@if(count($errors)>0)
    <div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{!! $error !!}</li>
        @endforeach
    </ul>
    </div>
    @endif
 <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{!!route('admin.cate.postEdit')!!}" method="POST">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        
                            <div class="form-group">
                                <label>Category Parent</label>
                                <select class="form-control" name="parent">
                                    <option value="0">Please Choose Category</option>
                                     <?php cate_parent($parent,0,'---',$data["parent_id"]) ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Category Name</label>
                                <input class="form-control" name="txtCateName" placeholder="Please Enter Category Name" value="{!! old('txtCateName',isset($data) ? $data['name'] : null) !!}" />
                            </div>
                            <div class="form-group">
                                <label>Category Order</label>
                                <input class="form-control" name="txtOrder" placeholder="Please Enter Category Order" value="{!! old('txtOrder',isset($data) ? $data['order'] : null) !!}" />
                            </div>
                            <div class="form-group">
                                <label>Category Description</label>
                                <textarea class="form-control" rows="3" name="description">{!! old('description',isset($data) ? $data['description'] : null) !!}</textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-default">Category Edit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                    @stop