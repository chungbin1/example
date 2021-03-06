           @extends('admin.master')
           @section('controller','Category')
           @section('action','List')
           @section('content')

                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Category Parent</th>
              
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data as $item)
                            <tr class="odd gradeX" align="center">
                                <td>{!! $item['id'] !!}</td>
                                <td>{!! $item['name'] !!}</td>
                                <td>
                              @if($item['parent_id']==0)
                              {!! "NONE" !!}
                              @else
                              <?php 
                              $parent=DB::table('cates')->where('id',$item['parent_id'])->first();
                              echo $parent->name;
                               ?>
                               @endif

                                </td>
                               
                                <td class="center"><a href="{!! URL::route('admin.cate.getDelete',$item['id'])!!}">  <img style="height: 50px; height: 20px;" src="{!! url('public/trangchu/images/delete.ico') !!}" alt=""></a></td>
                                <td class="center"><a href="{!! URL::route('admin.cate.getEdit',$item['id'])!!}"><img src="{!! url('public/trangchu/images/edit.ico') !!}" style="height: 50px; height: 20px;"  alt=""></a></td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                    @stop