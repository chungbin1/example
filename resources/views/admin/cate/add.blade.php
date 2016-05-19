@extends('admin.master')
@section('controller','Category')
@section('section','Add')
    
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
                        <form action="{!! route('admin.cate.getAdd') !!}" method="POST">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <div class="form-group">
                                <label>Category Parent</label>
                                <select class="form-control" name="parent">
                                  
                                    <option value="0">Please Choose Category</option>
                                      <?php cate_parent($parent) ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Category Name</label>
                                <input class="form-control" name="name" placeholder="Please Enter Category Name" />
                            </div>
                            <div class="form-group">
                                <label>Category Order</label>
                                <input class="form-control" name="order" placeholder="Please Enter Category Order" />
                            </div>
                            <div class="form-group">
                                <label>Category Description</label>
                                <textarea class="form-control" rows="3" name="description"></textarea>
                            </div>
                           
                            <button type="submit" class="btn btn-default">Category Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                @stop