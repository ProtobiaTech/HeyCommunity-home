<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="author" contents="dev4living.com">
    <title>HeyCommunity | 免费开源的线上社区解决方案</title>
    <meta name="keywords" content="HeyCommunity, hey-community, SNS, 社区, 社交网络, 开源社区, 开源社交, 社群">
    <meta name="description" content="HeyCommunity 是为中小社群量身打造的线上社区解决方案，其构建的 app 可适用于 iOS / android / windowPhone / Browser 等终端。让人欣喜的是其 app 是开源的 GPLv3 授权，我们为有需要的用户提供定制开发和运营服务">

    <link href="{{ asset('/bower-assets/bootswatch/flatly/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/bower-assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/style/app-dashboard.css') }}" rel="stylesheet">
    <script src="{{ asset('bower-assets/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('bower-assets/bootstrap/dist/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/javascript/helps.js') }}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    @include('layouts.common')
</head>

<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('home') }}">HeyCommunity <sup>V2.beta</sup></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('dashboard') ? 'active' : ''}}"><a href="{{ url('dashboard') }}">{{ trans('dashboard.Home') }}</a></li>

                @if (Auth::check())
                <li class="{{ Request::is('dashboard/data*') ? 'active' : ''}}"><a href="{{ url('dashboard/data') }}">{{ trans('dashboard.Data') }}</a></li>
                <li class="{{ Request::is('dashboard/setting*') ? 'active' : ''}}"><a href="{{ url('dashboard/setting') }}">{{ trans('dashboard.Setting') }}</a></li>
                @endif
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                <li class="{{ Request::is('sign-up') ? 'active' : ''}}"><a href="{{ url('/sign-up') }}">{{ trans('dashboard.SignUp') }}</a></li>
                <li class="{{ Request::is('log-in') ? 'active' : ''}}"><a href="{{ url('/log-in') }}">{{ trans('dashboard.Login') }}</a></li>
                @else
                <li class="{{ Request::is('dashboard/guide*') ? 'active' : ''}}"><a href="{{ url('/dashboard/guide') }}"><span class="text-danger"><i class="glyphicon glyphicon-lamp"></i> {{ trans('dashboard.Guide') }}</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->site_name }} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a target="_blank" href="http://{{ Auth::user()->domain }}">{{ trans('dashboard.Go to domain WebApp') }}</a></li>
                        <li><a target="_blank" href="http://{{ Auth::user()->sub_domain }}">{{ trans('dashboard.Go to sub_domain WebApp') }}</a></li>
                        <li><a href="{{ url('/log-out') }}">{{ trans('dashboard.Logout') }}</a></li>
                    </ul>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>


@yield('content')

<!-- DaoVoice -->
<script>(function(i,s,o,g,r,a,m){i["DaoVoiceObject"]=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;a.charset="utf-8";m.parentNode.insertBefore(a,m)})(window,document,"script",('https:' == document.location.protocol ? 'https:' : 'http:') + "//widget.daovoice.io/widget/86480a80.js","daovoice");</script>
@if (Auth::guest())
  <script>
    daovoice('init', {
      app_id: "86480a80",
    });
    daovoice('update');
  </script>
@else
  <script>
    daovoice('init', {
      app_id: "86480a80",
      email: "{{ Auth::user()->email }}",             // 替换成当前用户的邮件
      user_id: "{{ Auth::user()->id }}",              // 选填: 替换成当前用户的唯一标识
      signed_up: {{ Auth::user()->created_at->getTimestamp() }},  // 选填: // 替换当前用户的注册时间，格式为 Unix 时间戳
      name: "{{ Auth::user()->site_name }}",          // 选填: 替换当前用户的真名或者昵称
    });
    daovoice('update');
  </script>
@endif

@include('layouts.common')
</body>
</html>

