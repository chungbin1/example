@extends('admin.master')
@section('controller','Contact')
@section('action','List')
@section('content')
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Address</th>
                                <th>Delete</th>
                                <th>Reply</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                                $stt=0;
                        ?>
                         @foreach($contact as $item)
                            <?php $stt=$stt+1;
                                    ?>
                            <tr class="odd gradeX" align="center">
                                <td>{!! $stt !!}</td>
                                <td>{!! $item['name'] !!}</td>
                                <td>{!! $item['email'] !!}</td>
                                <td>
                                    {!! $item['phone'] !!}
                                </td>
                                <td>
                                {!! $item['address'] !!}
                                </td>
                                
                                <td class="center"><a href="./delete/<?php echo $item['id'] ?>" onclick=" return confirm('Bạn chắc chắn xóa không??')" > <img style="height: 50px; height: 20px;" src="{!! url('public/trangchu/images/delete.ico') !!}" alt=""></a></td>
                                <td class="center"><a href="./reply/<?php echo $item['id'] ?>"><img src="{!! url('public/trangchu/images/contact.ico') !!}" style="height: 50px; height: 20px;" alt=""></a></td>
                            </tr>
                            @endforeach
                        
                        </tbody>
                    </table>
                    @stop