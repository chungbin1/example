@extends('admin.master')
@section('controller','User')
@section('action','Add')
@section('content')
<div class="col-lg-7" style="padding-bottom:120px">
   @include('admin.blocks.errors')
                        <form action="{!! route('admin.user.getAdd') !!}" method="POST">
                        <input type="hidden" name="_token" value="{!! csrf_token()!!}"/>
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" name="username" placeholder="Please Enter Username" value="{!! old('username') !!}" />
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                                <label>RePassword</label>
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Please Enter RePassword" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" placeholder="Please Enter Email" value="{!! old('email') !!}" />
                            </div>
                            <div class="form-group">
                                <label>User Level</label>
                                <label class="radio-inline">
                                    <input name="level" value="1" checked="" type="radio">Admin
                                </label>
                                <label class="radio-inline">
                                    <input name="level" value="0" type="radio">Member
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">User Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                    @stop