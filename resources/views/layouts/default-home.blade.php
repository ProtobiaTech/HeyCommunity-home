<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <link rel="stylesheet" type="text/css" href="bower-assets/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/style/home.css">
    <script src="bower-assets/jquery/dist/jquery.min.js"></script>
    <script src="bower-assets/bootstrap/dist/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>HeyCommunity | 免费开源的线上社区解决方案,致力社群多样精彩社交</title>
    <meta name="keywords" content="HeyCommunity, hey-community, SNS, 社区, 嘿社区, HEY社区, 社交网络, 开源社区, 开源社交, 社群">
    <meta name="description" content="HeyCommunity 是为中小社群量身打造的线上社区解决方案，其构建的 app 可适用于 iOS / android / windowPhone / Browser 等终端。让人欣喜的是其 app 是开源的 GPLv3 授权，我们为有需要的用户提供定制开发和运营服务">
</head>

<body>
    <div class="main-background"></div>

    @include('layouts.common')

    <div id="main-body">
        <div class="section-body container-fluid">
            @yield('content')
        </div>

        <div id="footer" class="container-fluid">
            <div class="row" style="margin-bottom:10px;">
                <div class="col-xs-12 hidden-sm hidden-xs">
                    <div class="pull-right">
                    </div>
                    <nav id="nav-sm">
                        <span>HeyCommunity</span> &nbsp;&nbsp;&nbsp;
                        <a class="active" href="#home" onclick="$('.carousel').carousel(0)">首页</a>
                        <a href="#cases" onclick="$('.carousel').carousel(1)">场景和案例</a>
                        <a href="#prod" onclick="$('.carousel').carousel(2)">服务与价格</a>
                        <a href="#about" onclick="$('.carousel').carousel(3)">关于我们</a>
                        <a href="#jobs" onclick="$('.carousel').carousel(4)">工作机会</a>
                        <a target="_blank" href="https://github.com/dev4living/HeyCommunity">Github</a>
                    </nav>

                    <div class="pull-right">
                    </div>
                    <div>
                        &copy;2015 - 2016 Protobia.tech
                        &nbsp;&nbsp;&nbsp;
                        ICP: 15015443-8
                    </div>
                </div>

                <div class="col-xs-12 visible-sm-block visible-xs-block text-center">
                    <nav id="nav-xs" class="" style="max-width:90%; margin:0 auto;">
                        <a href="#home" onclick="$('#main-carousel').carousel(0)">首页</a>
                        <a href="#cases" onclick="$('#main-carousel').carousel(1)">场景和案例</a>
                        <a href="#prod" onclick="$('#main-carousel').carousel(2)">服务与价格</a>
                        <a href="#about" onclick="$(#main-carousel').carousel(3)">关于我们</a>
                        <a href="#jobs" onclick="$('#main-carousel').carousel(4)">工作机会</a>
                        <a target="_blank" href="https://github.com/dev4living/HeyCommunity">Github</a>
                    </nav>
                    <div>
                        <span>HeyCommunity</span> &nbsp;&nbsp;&nbsp;
                        &copy;2015 - 2016 Protobia.tech
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>