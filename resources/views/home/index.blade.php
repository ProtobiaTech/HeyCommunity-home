@extends('layouts.default-home')

@section('content')
    <script>
    window.onhashchange = function() {
        setCarouselItem();
    }

    $(function() {
        setCarouselItem();

        if (localStorage.getItem('weChatQrcodeShowed') != 'true') {
            $('#wechat-qrcode-modal').modal('show');
            localStorage.weChatQrcodeShowed = 'true';
        }
    });

    function setCarouselItem() {
        var currentHash = location.hash;
        switch (currentHash) {
            case '#home':
                $('.main-carousel-bg').addClass('isHomePage');
                $('#nav-sm a').removeClass('active');
                $('#nav-sm a').eq(0).addClass('active');
                $('#nav-xs a').removeClass('active');
                $('#nav-xs a').eq(0).addClass('active');
                $('#main-carousel').carousel(0)
                break;
            case '#cases':
                $('.main-carousel-bg').removeClass('isHomePage');
                $('#nav-sm a').removeClass('active');
                $('#nav-sm a').eq(1).addClass('active');
                $('#nav-xs a').removeClass('active');
                $('#nav-xs a').eq(1).addClass('active');
                $('#main-carousel').carousel(1)
                break;
            case '#prod':
                $('.main-carousel-bg').removeClass('isHomePage');
                $('#nav-sm a').removeClass('active');
                $('#nav-sm a').eq(2).addClass('active');
                $('#nav-xs a').removeClass('active');
                $('#nav-xs a').eq(2).addClass('active');
                $('#main-carousel').carousel(2)
                break;
            case '#about':
                $('.main-carousel-bg').removeClass('isHomePage');
                $('#nav-sm a').removeClass('active');
                $('#nav-sm a').eq(3).addClass('active');
                $('#nav-xs a').removeClass('active');
                $('#nav-xs a').eq(3).addClass('active');
                $('#main-carousel').carousel(3)
                break;
            case '#jobs':
                $('.main-carousel-bg').removeClass('isHomePage');
                $('#nav-sm a').removeClass('active');
                $('#nav-sm a').eq(4).addClass('active');
                $('#nav-xs a').removeClass('active');
                $('#nav-xs a').eq(4).addClass('active');
                $('#main-carousel').carousel(4)
                break;
            default:
                $('.main-carousel-bg').addClass('isHomePage');
        }
    }
    </script>


    <div id="main-carousel" class="carousel slide" data-interval="false" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            @include('home.items')
        </div>
    </div>
    <div class="main-carousel-bg"></div>
@endsection
