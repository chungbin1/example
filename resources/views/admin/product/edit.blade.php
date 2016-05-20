@extends('admin.master')
@section('controller','Product')
@section('action','Edit')
@section('content')

<div class="col-lg-7" style="padding-bottom:120px">
@include('admin.blocks.errors')
                        <form action="{{route('admin.product.postEdit')}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="id" value="{!! old('id',$product['id']) !!}"></input>
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="cate_id">
                                    <option value="0">Please Choose Category</option>
                                   @foreach($cate as $item1)
                                    <option value="{!! $item1['id'] !!}" <?php 
                                    if($item['id']=$product['id']){
                                    echo "selected='selected'";
                                    }

                                     ?>>
                                     {!!$item1['name']!!}
                                    </option>
                                   @endforeach

                                </select>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" placeholder="Please Enter Product Name" value="{!! old('name',$product['name']) !!}" />
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" name="price" placeholder="Please Enter Price" value="{!! old('price',$product['price']) !!}" />
                            </div>
                            
                            <div class="form-group">
                                <label>Product Description</label>
                                <textarea class="form-control" rows="3" name="description">
                                    {!! old('description',$product['description']) !!}
                                </textarea>
                               
                            </div>
                            <div class="form-group">
                                <label>Images_Current</label>
                               
                                <img src="{!! asset('resources/upload/'.$product['image']) !!}" width="150px;" height="150px;" />
                            </div>
                            <div class="form-group">
                                <label>Images</label>
                                <input type="file" name="image" value="">
                                
                            </div>
                            <div class="form-group">
                                <label>Links</label>
                                <input class="form-control" name="links" placeholder="Please Enter Links Address" value="{!! old('links',$product['links']) !!}" />
                            </div>
                            <button type="submit" class="btn btn-default">Product Edit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                       
                    </div>
                
                     <form>
                    @stop