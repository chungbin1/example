@extends('admin.master')
@section('controller','Banner')
@section('action','List')
@section('content')
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>

                            <tr align="center">
                              
                                <th>ID</th>
                                <th>Name</th>
                                <th>Images</th>
                                <th>Links</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td>{!! $item['id'] !!}</td>
                                <td>{!! $item['name'] !!}</td>
                                <td><img src="{!! asset('resources/upload/banner/'.$item['images']) !!}" style="width: 100px; height: 60px;" /></td>
                                <td>{!! $item['links'] !!}</td>
                                <td class="center"><a href="./delete/<?php echo $item['id'] ?>" onclick=" return confirm('Bạn chắc chắn xóa không??')" > <img style="height: 50px; height: 20px;" src="{!! url('public/trangchu/images/delete.ico') !!}" alt=""></a></td>
                                <td class="center"><a href="./edit/<?php echo $item['id'] ?>"><img src="{!! url('public/trangchu/images/edit.ico') !!}" style="height: 50px; height: 20px;"  alt=""></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table> 
                                         

                    @stop  
