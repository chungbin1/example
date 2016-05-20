@extends('admin.master')
@section('controller','User')
@section('action','List')
@section('content')
 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Level</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $stt=0; ?>
                        @foreach($user as $item)
                        <?php $stt=$stt+1 ?>
                            <tr class="odd gradeX" align="center">
                                <td>{!! $stt++ !!}</td>
                                <td>{!! $item['username'] !!}</td>
                                <td>{!! $item['email'] !!}</td>
                                <td>
                                    @if($item['level']==1)
                                       Admin 
                                    @else
                                      Member 
                                    @endif

                                </td>
                                <td class="center"><a href="./delete/{!! $item['id'] !!}" onclick="return confirm('Bạn có chắc chắn xóa không???')"> <img style="height: 50px; height: 20px;" src="{!! url('public/trangchu/images/delete.ico') !!}" alt=""></a></td>
                                <td class="center"> <a href="./edit/{!! $item['id'] !!}"><img src="{!! url('public/trangchu/images/edit.ico') !!}" style="height: 50px; height: 20px;"  alt=""></a></td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                    @stop