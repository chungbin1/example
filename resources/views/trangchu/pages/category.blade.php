  @extends('trangchu.master')
  @section('nav')
  <form name="frm_SearchList" id="frm_SearchList" method="POST" action="/tim-kiem?p=1&cat=3000-may-anh-ky-thuat-so">
        <input type="hidden" name="h_cat_id" id="h_cat_id" value="3000">
        <input type="hidden" name="h_cat_id_full" id="h_cat_id_full" value="3000-may-anh-ky-thuat-so">
        <input type="hidden" name="h_lastRecordNumber" id="h_lastRecordNumber" value="0">
        <input type="hidden" name="h_price" id="h_price" value="">
        <input type="hidden" name="h_refine" id="h_refine" value="">
        <input type="hidden" name="h_cur_page" id="h_cur_page" value="1">
        <div id="container-wrap">
            <div class="container">     
                <div class="container-listing">

                    <!--listing-left-->
                    <div class="listing-left filter-mobile" style="margin-top: -20px;">
                        <div class="filter-btn-mobile">Lọc sản phẩm</div>
                        <div class="filter-block-cont" style="">
                            <div class="filter-block-02">
                                <span class="ttl-box cate">Lọc theo danh mục</span>
                                <ul class="attr-filter">
                                @foreach($name as $t)
                                                                                    <li>
                                                    <a class="" href="{!! url('/tim-kiem',[$t->alias,$t->id]) !!}">
                                                        {!! $t->name !!}
                                                    </a>
                                                </li>
                                      @endforeach                                                
                                                                
                                </ul>
                            </div>
                            <div class="filter-block-02">
                                <span class="ttl-box price">Lọc kết quả theo Giá</span>
                                <ul class="attr-filter">
                                                                                        <li class=""> 
                                                        <a  rel="nofollow" href="/tim-kiem?cat=3000-may-anh-ky-thuat-so&price=>19000000" title=""> trên 19.000.000 <em>(3900)</em></a>
                                                        <span class="reset-filter">x</span>
                                                    </li>
                                                                                                        <li class="">
                                                        <a  rel="nofollow" href="/tim-kiem?cat=3000-may-anh-ky-thuat-so&price=7500000,19000000" title=""> từ 7.500.000 đến 19.000.000 <em>(5315)</em></a>
                                                        <span class="reset-filter">x</span>
                                                    </li>
                                                                                                        <li class="">
                                                        <a  rel="nofollow" href="/tim-kiem?cat=3000-may-anh-ky-thuat-so&price=3000000,7500000" title=""> từ 3.000.000 đến 7.500.000 <em>(5403)</em></a>
                                                        <span class="reset-filter">x</span>
                                                    </li>
                                                                                                        <li class="">
                                                        <a  rel="nofollow" href="/tim-kiem?cat=3000-may-anh-ky-thuat-so&price=1000000,3000000" title=""> từ 1.000.000 đến 3.000.000 <em>(5892)</em></a>
                                                        <span class="reset-filter">x</span>
                                                    </li>
                                                                                                <li class=""> 
                                                <a  rel="nofollow" href="/tim-kiem?cat=3000-may-anh-ky-thuat-so&price=<1000000" title=""> dưới 1.000.000 <em>(5905)</em></a> 
                                                <span class="reset-filter">x</span>
                                            </li>
                                                  
                                </ul>
                                <div class="range-price">
                                    <div class="row">
                                        <label>Từ</label>
                                        <div class="input"><input type="text" name="" placeholder="Nhập giá từ" autocomplete="off" value="" id="txt_price_from" name="txt_price_from"/></div>
                                    </div>
                                    <div class="row">
                                        <label>Đến</label>
                                        <div class="input"><input type="text" name="" placeholder="Nhập giá đến" autocomplete="off" maxlength="15" value="" id="txt_price_to" name="txt_price_to"/></div>
                                    </div>
                                    <div class="row">
                                        <label>&nbsp;</label>
                                        <div class="input"><input id="btn_price" class="bt-filter2" title="Lọc theo giá đã nhập" value="Lọc" type="submit"></div>
                                    </div>
                                </div>
                                <div class="banner2" style="margin-top: 10px;">
                                @foreach($banner as $ban)
                                    <div class="banner3">
                                      <a href="{!! $ban->links !!}"> <img src="{!! asset('resources/upload/banner/'.$ban->images) !!}" width="250px;" alt=""></a>

                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>  
                    </div>
                    <!--listing-right-->
                    <div class="listing-right">    
                                          
                            <div class="breadCrumb">
                                <ul itemprop="breadcrumb">
                                    <li typeof="v:Breadcrumb" class="">
                                        <svg class="icon icon-home"><use xlink:href="#icon-home"></use></svg>
                                        <a href="{!! url('/') !!}" title="#" rel="v:url" property="v:title">Trang chủ</a>
                                        <svg class="icon icon-Navigationdownhome"><use xlink:href="#icon-Navigationdownhome"></use></svg>
                                    </li>       
                                                          
                                        <li typeof="v:Breadcrumb" class="current">
                                          <p style="margin-top: 7px;">{!! $cate_name->name !!}    </p>     
                                            <svg class="icon icon-Navigationdownhome"><use xlink:href="#icon-Navigationdownhome"></use></svg>
                                        </li>
                                                                            <li typeof="v:Breadcrumb" class="current"><span></span></li>  
                                </ul>
                            </div>  
                                            
                        <div class="products-list">
                            <div class="result-block">
                                <div class="txt-result">Có <b>{!! count($product) !!}</b> kết quả trong <h1>{!! $cate->name !!}</h1></div>
                                <div class="display">
                                    <span>Hiển thị:</span>

                                    <!-- fix by chehc -->
                                    <a  class="detail active"><svg class="icon icon-quickmenu2"><use xlink:href="#icon-quickmenu2"></use></svg></a>
                                    <a  class="grid"><svg class="icon icon-Untitled-3"><use xlink:href="#icon-Untitled-3"></use></svg></a>
                                    <!--        <a href="javasctipt:void();" class="detail active">&nbsp;</a>
                                      <a href="javasctipt:void();" class="grid">&nbsp;</a>-->
                                </div>
                            </div>
                            <div class="list-items">
                                <!-- begin product -->
                                @foreach($product as $item)
                                        <div class="product">
                                            <div class="cont-product">
                                                <div class="main-inf">
                                                                <span class="img">
                                                                    <img  class="img100x100" src="{!! asset($item['image'])!!}" style="height: 70px;" alt="{!! $item['name'] !!}"/>
                                                                     <img  class="img200x200" src="{!! asset($item['image'])!!}" style="height: 100px; width: 100px" alt="{!! $item['name'] !!}"/>

                                                                </span>
                                                            </a> 
                                                                                                                <div class="txt-inf">
                                                                                                                        <a class="prod-name" href="{!! url('/chi-tiet',[$item->alias,$item->id]) !!}" ProductName="" title="{!! $item['name'] !!}" target="_self">{!! $item['name'] !!}</a>
                                                                                                                        <div class="box-price">
                                                                
                                                                <!-- Price -->
                                                                                                                                    <p class="price"><span>Giá từ:</span> 
                                                                   {!! $item['price'] !!}                                                                                    
                                                                                            
                                                            </p> 
                                                       

                                                        </div> 
                                                        <a href="" class="place_sell">Có {!! count($product['links']) !!} nơi bán</a>
                                                    </div>
                                                </div>
                                                <div class="add-inf">
                                                                                                          
                                                              <div class="desc">
                                                          {!! $item['links'] !!}              
                                                             </div>
                                                                                                         
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                <!-- end product -->
                            </div>
                        </div>
                        <div class="pagination-block">
                            <div class="pagination">
                                <ol>       
                                @if($product->currentPage() !=1)
                                    <li><a class="prev" href="{!! str_replace('/?','?',$product->url($product->currentPage() -1)) !!}">Prev</a></li>
                                    @endif
                                    @for($i=1; $i<=$product->lastPage();$i++)
                                    <li class="{!! ($product->currentPage() ==$i) ? 'active' : '' !!}">
                                    <a href="{!! str_replace('/?','?',$product->url($i)) !!}" class="current">{!! $i !!}</a>
                                    </li>
                                    @endfor
                                    @if($product->currentPage() !=$product->lastPage())
                                    <li>
                                    <a class="next" href="{!! str_replace('/?','?',$product->url($product->currentPage() +1)) !!}">Next</a>
                                    </li>
                                    @endif
                                </ol>
                            </div>
                        </div>
                        <div class="ajax-loading search-page"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="overlay_page"></div>
        <!-- Begin Website Map -->
        <!--  Để load map cần có dòng này để load các API javascript từ google map. -->
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&language=vi"></script> 
        <div id="lightbox" class="lightbox-hide">
            <div class="lightboxInner">
                <div id="modal_view_map" class="lightboxContent my-modal">
                    <div class="my-modal-head"> Bản đồ nơi bán
                        <button type="button" class="close-modal close-lightbox" title="Đóng">x</button>
                    </div>
                    <div class="my-modal-body">
                        <div id = "map-canvas"></div>
                    </div>
                </div>
            </div>
        </div>

        <div id="scroll-top"><svg class="icon icon-a_next"><use  xlink:href="#icon-a_next"></use></svg></div>

        <!-- End   Website Map  -->
    </form>
    @stop