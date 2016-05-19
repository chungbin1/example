@extends('admin.master')
@section('controller','Banner')
@section('action','Edit')
@section('content')

<div class="col-lg-7" style="padding-bottom:120px">
@include('admin.blocks.errors')
                        <form action="{{route('admin.banner.postEdit')}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{!! old('id',$banner['id']) !!}"></input>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" placeholder="Please Enter Product Name" value="{!! old('name',$banner['name']) !!}" />
                            </div>
            
                            <div class="form-group">
                                <label>Images_Current</label>
                               
                                <img name="img_current" src="{!! asset('resources/upload/banner/'.$banner['images']) !!}" width="150px;" height="150px;" />
                                <input type="hidden" name="img_current" value="{!! $banner['images'] !!}"></input>
                            </div>
                            <div class="form-group">
                                <label>Images</label>
                                <input type="file" name="images" value="">
                                
                            </div>
                            <div class="form-group">
                                <label>Links</label>
                                <input class="form-control" name="links" placeholder="Please Enter Links Address" value="{!! old('links',$banner['links']) !!}" />
                            </div>
                            <button type="submit" class="btn btn-default">Banner Edit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                       
                    </div>
                
                     <form>
                    @stop