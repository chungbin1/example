    @extends('admin.master')
    @section('controller','Banner')
    @section('section','Add')
    @section('content')
         <div class="col-lg-7" style="padding-bottom:120px">
         @if(count($errors)>0)
    <div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{!! $error !!}</li>
        @endforeach
    </ul>
    </div>
    @endif
                        <form action="{!! route('admin.banner.getAdd')!!}" enctype="multipart/form-data" method="POST">
                        <input type="hidden" value="{!! csrf_token() !!}" name="_token" >
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">
                                <label>Images</label>
                                <input type="file" name="images">
                            </div>
                            <div class="form-group">
                                <label>Link</label>
                                <input class="form-control" name="links" placeholder="Please Enter Link Address" />
                            </div>
                            <button type="submit" class="btn btn-default">Banner Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                    @stop