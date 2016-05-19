@extends('admin.master')
@section('controller','User')
@section('action','Edit')
@section('content')
<div class="col-lg-7" style="padding-bottom:120px">
    @include('admin.blocks.errors')
                        <form action="{!! route('admin.user.postEdit') !!}" method="POST">
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}"></input>
                        <input type="hidden" name="id" value="{!! old('id',$menu['id']) !!}"></input>
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" name="username" placeholder="Please Enter Username" value="{!! old('username',$menu['username']) !!}"/>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Please Enter Password" value="" />
                            </div>
                            <div class="form-group">
                                <label>RePassword</label>
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Please Enter RePassword" value="" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Please Enter Email" value="{!! old('email',$menu['email']) !!}" />
                            </div>
                            <div class="form-group">
                                <label>User Level</label>
                                <label class="radio-inline">
                                    <input name="level" value="1" checked="" type="radio" <?php if($menu['level']==1){
                                            echo "checked='checked'";
                                        }  ?>>
                                        Admin
                                </label>
                                <label class="radio-inline">
                                    <input name="level" value="0" type="radio" <?php 
                                        if($menu['level']==0){
                                            echo "checked='checked'";
                                        }

                                    ?>>Member
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">User Edit</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                    @stop