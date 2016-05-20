@extends('admin.master')
@section('controller','Product')

@section('action','List')
@section('content')
                        
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>

                            <tr align="center">
                              
                                <th>ID</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td>{!! $item['id'] !!}</td>
                                <td>{!! $item['name'] !!}</td>
                                <td>{!! $item['price'] !!}</td>
                                <td>
                                    <?php
                                    $cate=DB::table('cates')->where('id',$item['cate_id'])->first();
                                        echo $cate->name;
                                    ?>
                                </td>
                                
                                <td class="center" style="text-align: center"><a href="./delete/<?php echo $item['id'] ?>" onclick=" return confirm('Bạn chắc chắn xóa không??')" ><img style="height: 50px; height: 20px;" src="{!! url('public/trangchu/images/delete.ico') !!}" alt=""></a></td></td>
                                <td style="text-align: center;"><a href="./edit/<?php echo $item['id'] ?>"><img src="{!! url('public/trangchu/images/edit.ico') !!}" style="height: 50px; height: 20px;"  alt=""></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table> 
                                          <a href="{!! route('deleteAll') !!}" class="btn btn-danger">Delete All</a>  <div class="btn-group" style="">
                            <button type="button" class="btn btn-info">Export</button>
                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>

                            </button>
                            <ul class="dropdown-menu" role="menu" id="export-menu">
                                <li id="export-to-excel"><a href="{!! route('export') !!}">Export to Excel</a></li>
                            </ul>
                        </div> 

                    @stop  
