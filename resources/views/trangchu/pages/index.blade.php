  <!DOCTYPE html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title> Chung Bin - Tìm giá rẻ, so sánh giá, thông tin sản phẩm, đánh giá, khuyến mãi;  </title>
    <link rel="canonical" href="" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="chungbin.vn - tìm giá rẻ, tốt nhất, so sánh giá. Tìm sản phẩm, so sánh, đặc tính - cấu hình, đánh giá (bài viết, comment, nhận xét, bình luận), nơi bán, khuyến mãi" >
    <meta name="keywords" content="tìm so sánh giá rẻ nhất tốt nhất thông tin sản phẩm đặc tính cấu hình đánh giá bài viết comment nhận xét bình luận nơi bán khuyến mãi" >
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="distribution" content="Global" />
    <meta name="revisit" content="1 days" />
    <meta name="geo.placename" content="Vietnamese" />
    <meta name="geo.region" content="VN" />
  
    <meta http-equiv="content-language" content="vi" />
    <link rel="shortcut icon" href="{!! url('public/trangchu/images/favicon.ico?v=1.17') !!}"/>

    <link type="text/css" rel="stylesheet" href="{!! url('public/trangchu/css/style.min.css?v=1.17')!!}" media="screen" />
    
    <script src="{!! url('public/trangchu/js/FE/jquery-1.9.1.min.js') !!}"></script>
</head>
<body class="sore-style homepage">
    <!-- homepage -->
<div class="home-section">
  <div class="logo"><h1><img src="{!! url('public/trangchu/logo.png')!!}" alt=""/></h1></div>
  <div class="block-search-wrap">
    <div class="block-search">    

      <form name="searchForm" id="searchForm" method="get" action="{!! route('timkiem') !!}" onsubmit="return submitSearch();">
        <input type="search" name="k" value="" id="txt_Keyword" maxlength="256" dir="auto" placeholder="Bạn cần mua gì hôm nay nào?" autocomplete="off" style="border: 1px solid #00ace6;" />
        <button type="submit" id="searchSubmit" style="background-color: #00ace6;"><img src="{!! url('public/trangchu/search.png')!!}" alt="" height="40px; width="50px;" "></button>   
      </form> 
     
    </div>    
  </div>
  <div class="block-slide-txt">
    <div class="slide-txt" id="slide-txt">
      <div class="txt"><p><b>chungbin.vn</b> cung cấp cho bạn thông tin đa chiều về sản phẩm</p></div>
      <div class="txt"><p><b>chungbin.vn</b> giúp bạn so sánh giá cả giữa các nơi bán khác nhau</p></div>
      <div class="txt"><p><b>chungbin.vn</b> liên tục cập nhật giá cả, sản phẩm mới</p></div>
    </div>
  </div>  
  <div class="block-padding"></div>
  <div class="block-ralative">
    <div class="suggestion_keywords">
      <div class='tl'>Có thể bạn quan tâm:</div>
      @foreach($cate2 as $item)
      <a href="{!! url('tim-kiem',[$item->alias,$item->id]) !!}">{!! $item->name !!}</a>
      @endforeach
       </div>
  </div>
  <div class="block-bg-bot"> 
  <div class="block-category">
    <div class="title show">
      <svg class="icon icon-arrow-right2"><use xlink:href="#icon-arrow-right2"></use></svg>
      <span>TÌM THEO DANH MỤC</span>
      <svg class="icon icon-arrow-left2"><use xlink:href="#icon-arrow-left2"></use></svg>
    </div>
    
   
    <div class="cate-content desktop-cate">
      <ul>
      @foreach($menu as $rows)
        <li>
          <span class='icon-cate {!! $rows->alias !!}'></span>
          <a href="{!! url('tim-kiem-dm',[$rows->alias,$rows->id])!!}" title="{!! $rows->name !!}">{!! $rows->name !!}</a>
        </li>
        @endforeach
        </ul>      
    </div>
  </div>
  </div>
</div>
<footer id="footer" class="footer home footer-home">
      <div class="content_footer">
        <div class="copyright">©  Chungbin.vn</div>
        <!--<div class="copyright">3.46MB</div>-->
               <div class="policy">
          <ul>
            <li><a href="{!! route('lienhe') !!}" title="Liên hệ">Liên hệ</a></li>
          </ul>
        </div>
      </div>
</footer>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-60680169-1', 'auto');
  ga('send', 'pageview');

</script>    <!--         <script src="public/js/FE/jquery.lazyload.min.js"></script>
     -->
    <script src="{!! url('public/trangchu/js/FE/suggestSearch.min.js')!!}"></script>
 

        
        <script>
        var js_url = "/";
        var img_url = "/";
    </script>
            <script>
            $(document).ready(function () {
                /* slide text */
                $('#slide-txt').owlCarousel({
                    items: 1,
                    nav: false,
                    dots: true,
                    autoplay: true,
                    lazyLoad: true,
                    autoplayHoverPause: true,
                    loop: true,
                    margin: 0,
                    navText: ['', ''],
                    stagePadding: 0
                });

            });
        </script>
                <script>
            function owlRelated (obj,bol) {
                var len_owl = $(obj).children().length;
                    if(len_owl > 5){
                        $(obj).owlCarousel({
                            autoplay: bol,
                            nav: true,
                            navText: [ '<svg class="icon icon-a_back"><use xlink:href="#icon-a_back"></use></svg>', '<svg class="icon icon-a_next"><use xlink:href="#icon-a_next"></use></svg>' ],
                            loop: true,
                            dots: false,
                            lazyLoad: true,
                            autoplayTimeout: 3000,
                            autoplayHoverPause: true,
                            autoplaySpeed: 300,
                            responsive: {
                                320: {items: 2},
                                767: {items: 3},
                                1024: {items: 5},
                                1366: {items: 6}
                            }
                        });
                    }else{
                        var datasrc = $(obj).find('.owl-lazy').attr('data-src');
                        $(obj).find('.owl-lazy').attr('src', datasrc);
                    }
            }
            function owlHistory (obj,bol) {
                var len_owl = $(obj).children().length;
                if(len_owl > 6){
                    $(obj).owlCarousel({
                        autoplay: bol,
                        nav: true,
                        navText: [ '<svg class="icon icon-a_back"><use xlink:href="#icon-a_back"></use></svg>', '<svg class="icon icon-a_next"><use xlink:href="#icon-a_next"></use></svg>' ],
                        loop: true,
                        dots: false,
                        lazyLoad: false,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        autoplaySpeed: 300,
                        responsive: {
                            320: {items: 2},
                            767: {items: 3},
                            1023: {items: 8},
                            1280: {items: 9},
                            1366: {items: 10}
                        }
                    });
                }else{
//                    var datasrc = $(obj).find('.owl-lazy').attr('data-src');
//                    $(obj).find('.owl-lazy').attr('src', datasrc);
                }
            }
        </script>
    </body>
</html>

