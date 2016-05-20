        <div id="nav-main" class="nav-main">
    <div class="ic-nav">
        <img src="{!! url('public/trangchu/danhmuc.png')!!}" style="height: 20px; width: 40px; margin-top: 15px;" alt="">
        <span>Danh Mục</span></div>
    <div class="nav-top">
        <div class="nav-inner">
            <ul class="nav-cate">
            <?php 
            $menu_level1=DB::table('cates')->where('parent_id',0)->get();
             ?>
             @foreach($menu_level1 as $rows)
                <li class="menuItem catid-100"> 
                    <span class="icon-cate dien-thoai-may-tinh-bang"></span>
                    <a href="{!! url('tim-kiem-dm',[$rows->alias,$rows->id])!!}" title="Điện thoại, Máy tính bảng">{!! $rows->name !!}</a>
                    <div class="sub-nav ">
                        <div class="nav-sub-block">
                            <ul>    
                                <?php 
                                            $menu_level2=DB::table('cates')->where('parent_id',$rows->id)->get();

                                 ?>
                                 @foreach($menu_level2 as $item)
                                <li>
                               <h4> {!! strip_tags($item->name) !!}</h4>
                                
                                
                                <ul>
                                <?php 
                                 $menu_level3=DB::table('cates')->where('parent_id',$item->id)->get();
                                 ?>
                                 @foreach($menu_level3 as $name)
                                    <li>
                                        <a href="{!! url('tim-kiem',[$name->alias,$name->id])!!}" title="{!! $name->name !!}">{!! $name->name !!}</a>
                                    </li>
                                    @endforeach
                                </ul>
                                </li>
                                @endforeach
                            </ul>
                            
                        </div>
                        

                       

                </li> 
                @endforeach
            </ul>
        </div>
    </div>
</div>        <!-- end menu -->
