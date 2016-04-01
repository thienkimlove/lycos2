<!DOCTYPE html>
<html data-ng-app="Application">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Cache-Control" content="no-cache" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=yes" />
    <meta http-equiv="imagetoolbar" content="no" />
    <meta name="description" content="{{!empty($meta_desc)? $meta_desc : 'LycoEye'}}" />
    <meta name="keyword" content="{{!empty($meta_keywords)? $meta_keywords : 'LycoEye, bài viết, hướng dẫn'}}" />
    <title>{{!empty($meta_title)? $meta_title : 'Lycoeye.vn'}}</title>
    <link rel="stylesheet" href="{{url('css/frontend.css')}}" type="text/css"/>
    <!--[if lte IE 8]>
    <script src="{{url('js/html5.js')}}" type="text/javascript"></script>
    <![endif]-->
</head>
<body data-ng-controler="MainController">
<div id="fb-root"></div>
<script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3&appId=1569708656596422";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<div class="wrapper">

    @include('frontend.header')

    @include('frontend.nav')

    <section class="section fixW">
       @yield('content')
    </section>
    <!-- Footer -->
    @include('frontend.footer')

    <script>
        var Config = {};
        Config.url = '{{ url('/') }}';

    </script>
    <script type="text/javascript" src="{{url('/js/frontend.js')}}"></script>
    <script type="text/javascript" src="{{url('/js/frontend-custom.js')}}"></script>
    <script type='text/javascript'>window._sbzq||function(e){e._sbzq=[];var t=e._sbzq;t.push(["_setAccount",13099]);var n=e.location.protocol=="https:"?"https:":"http:";var r=document.createElement("script");r.type="text/javascript";r.async=true;r.src=n+"//static.subiz.com/public/js/loader.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(r,i)}(window);</script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-62916428-1', 'auto');
        ga('send', 'pageview');

    </script>
    <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 950378779;
        var google_custom_params = window.google_tag_params;
        var google_remarketing_only = true;
        /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
    <noscript>
        <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/950378779/?value=0&amp;guid=ON&amp;script=0"/>
        </div>
    </noscript>
    @yield('footer')
</div>
</body>
</html>