<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HeyCommunity | 免费开源的线上社区解决方案,致力社群多样精彩社交</title>
  <meta name="keywords" content="HeyCommunity, hey-community, SNS, 社区, 嘿社区, HEY社区, 社交网络, 开源社区, 开源社交, 社群">
  <meta name="description" content="HeyCommunity 是为中小社群量身打造的线上社区解决方案，其构建的 app 可适用于 iOS / android / windowPhone / Browser 等终端。让人欣喜的是其 app 是开源的 GPLv3 授权，我们为有需要的用户提供定制开发和运营服务">

  <title>HeyCommunity</title>
  <link href="css/site8e29.css?25" rel="stylesheet">
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" type="text/css" href="css/slick.css"/>
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script>
    $(function() {
      setTimeout(function(){
        $('.snap-bar').addClass('active');
      },1500);
    });
  </script>

  <!-- -->
  <script type="text/javascript" src="js/slick.js"></script>
  <script>
  $(document).ready(function() {
    $('#slider').slick({
      dots: true,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      adaptiveHeight: false,
      fade: true,
      cssEase: 'ease-in-out',
      draggable: false,
      autoplay: true,
      autoplaySpeed: 8000,
      focusOnSelect: false,
      // https://github.com/kenwheeler/slick/issues/1537
      accessibility: false
    }).on('beforeChange', function(event, slick, currentSlide, nextSlide){
      $slide = $("#slider .slick-current");
      $slide.addClass('slick-fade-out');
      setTimeout(function(){
        $slide.removeClass('slick-fade-out')
      }, 300) // match speed in slick config object above
    });
  });
  </script>
</head>

<body class="full-page home">
<div id="creator-bar" class="snap-bar active hide">
  <span class="large">HeyCommunity v2.0.0-beta.1 is comming</span>
</div>

<nav class="navbar navbar-default horizontal-gradient" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <h1 style="padding: 20px 0 0;">
        <a href="/" style="color:#fff;">HeyCommunity</a>
        <small style="color:#ddd;">线上社区解决方案</small>
      </h1>
    </div>

    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a class="nav-link" href="{{ url('/feature') }}">功能特性</a></li>
        <li><a class="nav-link" href="{{ url('/') }}">云社区</a></li>
        <li><a class="nav-link" href="{{ url('business') }}">商业解决方案</a></li>
        <li><a class="nav-link" href="{{ url('open-sources') }}">开源软件</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle nav-link " data-toggle="dropdown" role="button" aria-expanded="false">更多 <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <div class="arrow-up"></div>
            <li><a class="nav-link" href="http://showcase.ionicframework.com/">工作机会</a></li>
            <li><a class="nav-link" href="http://showcase.ionicframework.com/">关于我们</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="container content-container">
  <!-- -->
  <div id="slider" class="primary-row">
    <div class="slide horizontal-gradient">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 fadeIn">
            <h1>
              1分钟上线你的社区
            </h1>
            <h3>
              再小的社群，都需要有一个独立的功能多样的线上社区，便于社群成员之间的交流与互动。
            </h3>
            <p class="btn-row">
              <a id="repo-download" class="btn btn-primary btn-download desktop-btn" href="getting-started/index.html">开始创建云社区</a>
            </p>
            <p class="version-text">
              v2.0.0-beta.1, 于 2016-05-12 上线
            </p>
          </div>
          <div class="col-sm-6 feature-img one">
            <a href="http://view.ionic.io/" target="_blank"><img class="app-icon one" src="img/homepage/ionicview-icon_2x.png"><span class="demo-link">Ionic View</span></a>
          </div>
        </div>
      </div>
    </div>

    <div class="slide slide-market">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 fadeIn">
            <h1>强大</h1>
            <h3>
              HeyCommunity 能够运行在 iOS / Android / Browser 等平台 <br>
              做为微信 WebApp 使用，可体验到微信消息推送、微信授权登录等功能
            </h3>
            <p class="btn-row">
              <a class="btn btn-primary btn-download desktop-btn" href="http://market.ionic.io/" target="_blank">了解 HeyCommunity 功能特性</a>
              <a class="btn btn-primary btn-download mobile-btn" href="http://market.ionic.io/" target="_blank">了解 HeyCommunity 功能特性</a>
            </p>
          </div>
          <div class="col-sm-6 feature-img img-loaded"></div>
        </div>
      </div>
    </div>

    <div class="slide slide-market">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 fadeIn">
            <h1>开放</h1>
            <h3>
              HeyCommunity 遵循GPL v3 免费开源 <br>
            </h3>
            <p class="btn-row">
              <a class="btn btn-primary btn-download desktop-btn" href="http://market.ionic.io/" target="_blank">了解 HeyCommunity 功能特性</a>
              <a class="btn btn-primary btn-download mobile-btn" href="http://market.ionic.io/" target="_blank">了解 HeyCommunity 功能特性</a>
            </p>
          </div>
          <div class="col-sm-6 feature-img img-loaded"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- -->
  <div class="utility-bar">
    <div class="container">
      <div class="row">
        <ul class="social-row ionic col-md-7">
          <li><a href="https://github.com/driftyco/ionic" target="_blank"><i class="ion-social-github"></i> <span id="gh-stargazers"></span> stars</a></li>
          <li><a href="https://github.com/driftyco/ionic" target="_blank"><i class="ion-fork-repo"></i> <span id="gh-forks"></span> forks</a></li>
          <li><a href="https://twitter.com/IonicFramework" target="_blank"><i class="ion-social-twitter"></i> <span id="tw-followers">Twitter</span></a></li>
        </ul>
        <form action="http://codiqa.createsend.com/t/t/s/jytylh/" method="post" class="input-group col-md-5">
          <input name="cm-jytylh-jytylh" class="form-control" type="email" placeholder="Enter your email for the latest ionic news" required />
          <span class="input-group-btn">
            <button class="btn btn-default" type="submit">Email me!</button>
          </span>
        </form>
      </div>
    </div>
  </div>
</div>


<!-- content -->
@yield('content')


<!-- footer -->
<footer class="footer">
  <!-- -->
  <nav class="base-links">
    <dl>
      <dt>我们</dt>
      <dd><a href="/about-us">关于我们</a></dd>
      <dd><a href="/jobs">工作机会</a></dd>
    </dl>

    <dl>
      <dt>开放源代码</dt>
      <dd><a href="docs/index.html">HeyCommunity</a></dd>
      <dd><a href="docs/index.html">GPLv3 License</a></dd>
    </dl>
  </nav>


  <!-- -->
  <div class="newsletter row">
    <div class="newsletter-container">
      <div class="col-sm-7">
        <div class="newsletter-text">Stay in the loop</div>
        <div class="sign-up">Sign up to receive emails for the latest updates, features, and news on the framework.</div>
      </div>

      <form action="http://codiqa.createsend.com/t/t/s/jytylh/" method="post" class="input-group col-sm-5">
        <input id="fieldEmail" name="cm-jytylh-jytylh" class="form-control" type="email" placeholder="Email" required />
        <span class="input-group-btn">
          <button class="btn btn-default" type="submit">Subscribe</button>
        </span>
      </form>
    </div>
  </div>


  <!-- -->
  <div class="copy">
    <div class="copy-container">
      <p class="authors">
        Thinks to the
        <a href="http://ionicframework.com" target="_blank">Ionic Framework</a>
        and
        <a href="http://angular.io" target="_blank">Angular</a>
        <span>|</span>
        &copy; 2015-2016 <a href="http://ionic.io/about">Protobia.tech</a>
      </p>
    </div>
  </div>
</footer>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
<script src="js/sitec4ca.js?1"></script>
</body>
</html>
