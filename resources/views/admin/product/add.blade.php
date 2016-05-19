    @extends('admin.master')
    @section('controller','Product')
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
                        <form action="{!! route('admin.product.getAdd')!!}" enctype="multipart/form-data" method="POST">
                        <input type="hidden" value="{!! csrf_token() !!}" name="_token" >
                        <div class="form-group">
                                <label>Category Parent</label>
                                <select class="form-control" name="cate_id">
                                  
                                    <option value="0">Please Choose Category</option>
                                      <?php cate_parent($cate) ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input class="form-control" name="name" placeholder="Please Enter Username" />
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" name="price" placeholder="Please Enter Password" />
                            </div>
                            <div class="form-group">
                                <label>Images</label>
                                <input type="file" name="image">
                            </div>
                            <div class="form-group">
                                <label>Product Description</label>
                                <textarea class="form-control" rows="3" name="description" placeholder="Please Enter Description"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Links</label>
                                 <input class="form-control" name="links" placeholder="Please Enter Link" />
                            </div>
                            
                            <button type="submit" class="btn btn-default">Product Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                    @stop