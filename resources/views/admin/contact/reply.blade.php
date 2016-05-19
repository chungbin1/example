@extends('admin.master')
@section('controller','User')
@section('action','Edit')
@section('content')
<div class="col-lg-7" style="padding-bottom:120px">
    @include('admin.blocks.errors')
                        <form action="{!! route('admin.contact.postReply') !!}" method="POST">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}"></input>
                        <input type="hidden" name="id" value="{!! old('id',$contact['id']) !!}"></input>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" placeholder="Please Entername" value="{!! old('name',$contact['name']) !!}"/>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" placeholder="" value="{!! old('email',$contact['email']) !!}" />
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone" placeholder=" " value="{!! old('phone',$contact['phone']) !!}" />
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" name="address" placeholder=" " value="{!! old('address',$contact['address']) !!}" />
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" name="phone" placeholder=" " value="{!! old('phone',$contact['phone']) !!}" />
                            </div>
                            <div class="form-group">
                                <label>Content</label>
                            <textarea name="content">{!! old('content',$contact['content']) !!}</textarea>
                            </div>
                             <div class="form-group">
                                <label>Reply</label>
                            <textarea name="reply"></textarea>
                            </div>

                          
                            <button type="submit" class="btn btn-default">Reply</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                    @stop