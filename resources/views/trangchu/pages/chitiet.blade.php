@extends('trangchu.master')
@section('nav')
<div id="container-wrap">
   <div class="products-model-content">
      <div class="container">
         <!-- BREADCRUMB -->
                  <div class="breadCrumb">
            <ul itemprop="breadcrumb">
               <li typeof="v:Breadcrumb" class="">
                  <svg class="icon icon-home">
                     <use xlink:href="#icon-home"></use>
                  </svg>
                  <a href="{!! url('/') !!}" title="#" rel="v:url" property="v:title">Trang chủ</a>
                  <svg class="icon icon-Navigationdownhome">
                     <use xlink:href="#icon-Navigationdownhome"></use>
                  </svg>
               </li>
                              <li typeof="v:Breadcrumb" class="">
                  <a href="{!! url('tim-kiem',[$menu->alias,$menu->id]) !!}" title="#" rel="v:url" property="v:title">{!! $menu->name !!}</a>
                  <svg class="icon icon-Navigationdownhome">
                     <use xlink:href="#icon-Navigationdownhome"></use>
                  </svg>
               </li>
                              <li typeof="v:Breadcrumb" class="current">
                  <a href="{!! url('tim-kiem',[$cate->alias,$cate->id]) !!}" title="#" rel="v:url" property="v:title">{!! $cate->name !!}</a>
                  <svg class="icon icon-Navigationdownhome">
                     <use xlink:href="#icon-Navigationdownhome"></use>
                  </svg>
               </li>
                           </ul>
         </div>
                  <!-- END BREADCRUMB -->
                  <div class="detail-description block-news-cate">
            <input type="hidden" id="pagesizeart" value="3">
                  <!-- block san pham lien quan -->
      <div class="block-relate block-relate-vertical">
        <div class="box-tl" style=""><span>Sản phẩm cùng loại</span></div>
        <div class="box-items" id="block_relate_vertical">        
        <div class="box-items-cont">
        @foreach($product_last as $item)
          <div class="box-item">
            <a class="item" href="{!! url('/chi-tiet',[$item->alias,$item->id]) !!}" ProductName="" title="Xem chi tiết sản phẩm" productname=""  target="_self">
              <img class="img100x100 imglazy" src="{!! asset($item->image) !!}" width="80" height="80" alt="{!! $item->name !!}">
              <span class="name">{!! $item->name !!}</span>
              <span class="price">{!! $item->price !!} </span>
            </a>
          </div>
    
         @endforeach
          </div>

        </div>
        
      </div>
<div>
<script async src="/pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- right banner 300x250 -->
<div class="banner">
   @foreach($banner as $ban)
  <div class="banner1">
     <a href="{!! $ban->links !!}"><img src="{!! asset('resources/upload/banner/'.$ban->images) !!}" style="width: 250px;" alt="{!! $ban->name !!}"></a>
  </div>
  @endforeach
</div>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
         </div>
                  <div class="block-tab-wap">
            <div class="block-info-model util-clearfix">
               <div class="block-info-left">
                   <div class="item" > <img style="width:200px;height: 200px"  class="imglazy" src="{!! asset($product->image) !!}"
                                               title="" alt="{!! $product->name !!}"/> </div>
               </div>
               <div class="block-info-right">
                  <div class="smallldes">
                     <div class="name" itemscope itemtype="http://schema.org/Product">
                        <h1 itemprop="name">{!! $product->name !!}</h1>
                     </div>
                     <div class="block-rating">
                        <div class="box-rate">
                           <div class="stars">
                              <!--    <div class="stars-b"><div class="stars_" style="width: 50%;">&nbsp;</div></div>  -->
                              <span class="star "><svg class="icon icon-star-full"><use xlink:href="#icon-star-full"></use></svg></span><span class="star "><svg class="icon icon-star-full"><use xlink:href="#icon-star-full"></use></svg></span><span class="star "><svg class="icon icon-star-full"><use xlink:href="#icon-star-full"></use></svg></span><span class="star "><svg class="icon icon-star-full"><use xlink:href="#icon-star-full"></use></svg></span><span class="star "><svg class="icon icon-star-full"><use xlink:href="#icon-star-full"></use></svg></span>                              <span id="rating_quantity">(0)</span>
                           </div>
                           <a class="stars-c view-rate-tab" href="javascript:void(0)" rel="nofollow" title="Đánh giá"><span id="comment_quantity">0</span> bình luận</a> 
                        </div>
                        <div class="popover fade bottom in">
                           <div class="arrow">&nbsp;</div>
                           <h3 class="popover-title">Đánh giá sản phẩm này</h3>
                           <div class="popover-content">
                              <div id="box_rating" class="box-rating">
                                 <div class="stars">
                                    <span id="star_1" class="star ">
                                       <svg class="icon icon-star-full">
                                          <use xlink:href="#icon-star-full"></use>
                                       </svg>
                                    </span>
                                    <span id="star_2" class="star ">
                                       <svg class="icon icon-star-full">
                                          <use xlink:href="#icon-star-full"></use>
                                       </svg>
                                    </span>
                                    <span id="star_3" class="star ">
                                       <svg class="icon icon-star-full">
                                          <use xlink:href="#icon-star-full"></use>
                                       </svg>
                                    </span>
                                    <span id="star_4" class="star ">
                                       <svg class="icon icon-star-full">
                                          <use xlink:href="#icon-star-full"></use>
                                       </svg>
                                    </span>
                                    <span id="star_5" class="star ">
                                       <svg class="icon icon-star-full">
                                          <use xlink:href="#icon-star-full"></use>
                                       </svg>
                                    </span>
                                 </div>
                                 <span id="rating_txt"></span>
                                 <input type="hidden" id="h_ratingpoint" value="">
                                 <div class="ps2_clear"></div>
                              </div>
                              <span id="rating_comment_msg"></span>
                              <div class="box-comment comment-rate ">
                                 <span class="tl">
                                    Nhập nhận xét về sản phẩm 
                                    <svg class="icon icon-Navigationdownhome">
                                       <use xlink:href="#icon-Navigationdownhome"></use>
                                    </svg>
                                 </span>
                                 <div class="box-cont">
                                    <form id="frmComment" action="/comment" method="POST">
                                       <input type="text" class="comment_name" placeholder="Họ và tên">
                                       <textarea class="comment_data" placeholder="Nhận xét về sản phẩm này"></textarea>
                                       <button class="btn" type="button" onClick="submitComment('frmComment');">Gửi</button>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="des">
                           <h3>{!! $product->description !!}</h3>

                     </div>
                     <div>
                      <h3> Giá của sản phẩm là: {!! $product->price !!}</h3>
                     </div>
                  </div>
               </div>
            </div>
                        <input type="hidden" id="h_modelid" value="28751">
            <div class="div-point-scroll"></div>
            <div id="model-tabs" class="model-tabs-block ui-tabs" >
               <div class="box-tabs-tl">
                  <ul class="model-tabs-ul ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
                     <li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active ui-state-focus">
                        <a href="#tabs_compare" rel="nofollow" class="tabs_compare ui-tabs-anchor" title="So sánh giá">
                           <svg class="icon icon-data">
                              <use xlink:href="#icon-data"></use>
                           </svg>
                           <span>So sánh giá</span> 
                        </a>
                     </li>
                   
                     <li class="tabs_comment-pos ui-state-default ui-corner-top">
                        <a href="#tabs_comment" class="tabs_comment ui-tabs-anchor" rel="nofollow" title="Bình luận">
                           <svg class="icon icon-bubble3">
                              <use xlink:href="#icon-bubble3"></use>
                           </svg>
                           <span>Bình luận (<span id="comment_quantity2">0</span>)</span>
                        </a>
                     </li>
                  </ul>
               </div>
               <div class="ui-block-content">
                  <div id="tabs_compare" class="tabs-content-block show">
                  <form name="frm_ProductPrice" id="frm_ProductPrice" method="POST" action="/so-sanh/Canon_EOS_70D_Body-28751/1.html?">
                     <div class="title-sm">
                        <svg class="icon icon-data">
                           <use xlink:href="#icon-data"></use>
                        </svg>
                        <span>So sánh giá</span>
                     </div>
                     <div class="block-compare">
                        <div class="box-filter-c">
                           <div class="tl">28 nơi bán được tìm thấy.</div>
                          
                        </div>
                        <?php 
                        $i=$product->name;
                        $product_search=DB::table('products')->select('id','price','name','alias','description','links','address')->where('name','LIKE','%'.$i.'%')->get();

                         ?>
                         @foreach($product_search as $rows)
                        <div class="row-c row-td util-clearfix">
                           <div class="col-c box-name">
                                                            <a class="img" href="{!! url('chi-tiet',[$rows->alias,$rows->id]) !!}" title="">
                              <img alt="{!! $rows->name !!}" src="{!! asset($item['image']) !!}"
                                 alt="" /> </a>
                                                            <a href="{!! url('chi-tiet',[$rows->alias,$rows->id]) !!}" title="">{!! $rows->name !!}</a>
                                                                                          <div class="box-icon-sale">
                               
                              </div>
                                                         </div>
                           <div class="col-c box-price">
                              <strong>{!! $rows->price !!}</strong>
                            
                           </div>
                           <div class="col-c box-view">
                            
                               <a class="btn-view" target="_blank" href="{!! $rows->address !!}">Xem ngay</a>
                                                            <div onclick="viewMoreItems(this);" class="more-offers" data-less="Thu gọn" data-more="Có 3 sản phẩm cùng cửu hàng" data-siteid="moreItemSite50">
                                                                 
                                 <span class="tg">Thu gọn (<b>3</b>)</span>
                                                                  <svg class="icon icon-Navigationdownhome">
                                    <use xlink:href="#icon-Navigationdownhome"></use>
                                 </svg>
                              </div>
                                                         </div>
                           <div class="col-c box-address">
                              <div class="box-local">
                                                                  
                                <a href="{!! $rows->links !!}" title="{!! $rows->links !!}">{!! $rows->links !!}</span></a>
                              </div>
                           </div>
                        </div>
                        @endforeach
                       
                         <div class="pagination-block">
                        <div class="pagination">
                           <ol><li ><a class="prev" href="javascript:void(0);" onclick='return false;'>Prev</a></li><li><a href="javascript:void(0);" onclick="return false;" class="current" >1</a></li><li><a href="/so-sanh/Canon_EOS_70D_Body-28751/2.html" onclick="showProductPrice(this, 'so-sanh/Canon_EOS_70D_Body-28751', 2, '')">2</a></li><li><a class="next" href="/so-sanh/Canon_EOS_70D_Body-28751/2.html" onclick="showProductPrice(this, 'so-sanh/Canon_EOS_70D_Body-28751', 2, '')">Next</a></li></ol>                        </div>
                     </div>
                                          </form>
                  </div>
               
               <div id="tabs_intro" class="tabs-content-block">
                  <div class="block-info util-clearfix">
                     <div class="main_news">
                        <div class="loading-css"></div>
                                             </div>  
                      
                  </div>
               </div>
               
               <div id="tabs_comment" class="tabs-content-block">
                  <div class="block-comment">
                     <div class="main-show-comment qa">
                        <script>
                           var img_url = "/";
                           var prjimage_url = "public/images/";
                        </script>
                        <span id="comment_msg"></span>
                        <div class="fb_cmt_buyer">
                                                      <div class="question">
                              <h3 class="ttl">Nhập ý kiến của bạn</h3>
                              <div class="text">
                                 <form id="frmComment1" action="/comment" method="POST">
                                    <input type="text" class="comment_name" placeholder="Họ và tên">
                                    <textarea class="comment_data" placeholder="Nhận xét về sản phẩm này"></textarea>
                                    <button class="bt-send" type="button" onClick="submitComment('frmComment1');">Gửi</button>
                                 </form>
                              </div>
                           </div>
                                                   </div>
                     </div>
                  </div>
               </div>
               </div>
                      <!-- block san pham lien quan -->
      
            </div>
         </div>
         
      </div>
   </div>
</div>
@stop
