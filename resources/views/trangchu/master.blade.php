    <!DOCTYPE html>
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title> ChungBin.vn  </title>
    <link rel="canonical" href="" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="" >
    <meta name="robots" content="INDEX,FOLLOW" />
    <meta name="distribution" content="Global" />
    <meta name="revisit" content="1 days" />
    <meta name="geo.placename" content="Vietnamese" />
    <meta name="geo.region" content="VN" />
    <meta name="dc.creator" content="Sore" />
    <meta name="generator" content="Sore.vn" />
    <link rel="dns-prefetch" href="/">
    <meta http-equiv="content-language" content="vi" />
    <link rel="shortcut icon" href="{!! url('public/trangchu/images/favicon.ico?v=1.17')!!}"/>

    <link type="text/css" rel="stylesheet" href="{!! url('public/trangchu/css/style.min.css?v=1.17')!!}" media="screen" />
    
    <script src="{!! url('public/trangchu/js/FE/jquery-1.9.1.min.js')!!}"></script>
</head>
<body class="sore-style search-page">
    <div id="topScroll">&nbsp;</div>
<header id="header" class="header productcate">
    <div class="content-header">
        <div class="logo"><a href="{!! url('/') !!}" title=""><img src="{!! url('public/trangchu/logo.png')!!}" style="width: 120px; height: 50px;"  alt=""/></a></div>
        <div id="jsMenuMarkLayer"></div>
        <!-- begin menu -->
 @include('trangchu.blocks.menu')
        <div class="search-bar">
            <form name="trueform2" id="trueform2" method="get" action="{!! route('timkiem') !!}" onsubmit="return submitSearch();">
                <div class="selectcate_inputtext">
                    <div class="inputtext">
                        <input type="text" id="name" name="k" placeholder="Bạn cần mua gì?" value="" maxlength="100" class="ui-autocomplete-input" autocomplete="off">
                    </div>
                    <button class="btn-search" name="" id="" type="submit">
                       <img src="{{ url('public/trangchu/search.png') }}" height="30px; width="30px;" " alt="">
                    </button>
                    <!-- <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content">
                            <li class="ui-menu-item"  tabindex="-1"><a>Camera IP hồng ngoại</a></li>
                            <li class="ui-menu-item"  tabindex="-1"><a>Camera IP hồng ngoại</a></li>
                            <li class="ui-menu-item"  tabindex="-1"><a>Camera IP hồng ngoại</a></li>
                    </ul> -->
                </div>
            </form>
        </div>
    </div>
</header>
<!-- CONTENT CENTER -->

  @yield('nav')
    
<script>
                                    $(document).ready(function () {

                                        $('.display .detail').on('click', function () {
                                            lineMode();
                                        });
                                        $('.display .grid').on('click', function () {
                                            gridMode();
                                        });

                                        showFiterMobile();

                                        //set mode when paging
                                        var viewMode = sessionStorage.getItem("vm");
                                        if (viewMode == "line")
                                            lineMode();
                                        else if (viewMode == "grid")
                                            gridMode();
                                    });

                                    function lineMode() {
                                        sessionStorage.setItem("vm", "line");
                                        $('.display .detail').addClass('active');
                                        $('.display .grid').removeClass('active');
                                        $('body').removeClass("grid-mode");

                                    }

                                    function gridMode() {
                                        sessionStorage.setItem("vm", "grid");
                                        $('.display .grid').addClass('active');
                                        $('.display .detail').removeClass('active');
                                        $('body').addClass("grid-mode");

                                    }

                                    function showFiterMobile() {
                                        $('.filter-btn-mobile').on('click', function () {
                                            $(this).parent().toggleClass('show-filter');
                                        });
                                    }
                                    
</script>

<script>


    var options = {

        disableDefaultUI: true,
        mapTypeControl: true,
        mapTypeControlOptions: {
            style: google.maps.MapTypeControlStyle.DEFAULT,
            position: google.maps.ControlPosition.LEFT_BOTTOM,
        },
        streetViewControl: false,
        streetViewControlOptions: {
            position: google.maps.ControlPosition.RIGHT_BOTTOM,
        },
        zoomControl: true,
        zoomControlOptions: {
            position: google.maps.ControlPosition.RIGHT_BOTTOM,
        },
    };
    var map = new google.maps.Map(document.getElementById("map-canvas"), options);

    var markers = [];

    var map_resize = true;

// end   map (+ function viewMap(mapinfo)) ================================


</script>      
<footer id="footer" class="footer productcate ">
      <div class="content_footer">
        <div class="copyright">©  Chungbin.vn</div>
        <!--<div class="copyright">4.27MB</div>-->
               <div class="policy">
          <ul>
            <li><a href="javascript:void()" title="Giới thiệu">Giới thiệu</a></li>
            <li><a href="javascript:void()" title="Hướng dẫn  ">Hướng dẫn  </a></li>
            <li><a href="javascript:void()" title="Góp ý    ">Góp ý </a></li>
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
    <script src="{{ url('public/trangchu/js/FE/suggestSearch.min.js')}}"></script>
 

        <script src="{{ url('public/trangchu/js/FE/sore-productcate.min.js')}}"></script>
        
            <script src="{{ url('public/trangchu/js/FE/sore-map_source.min.js')}}"></script>
        
            <script>
        var js_url = "/";
        var img_url = "/";
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

