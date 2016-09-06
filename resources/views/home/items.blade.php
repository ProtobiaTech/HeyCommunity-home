<!-- Home -->
<div class="item active" id="section-home">
    <div class="row row-1">
        <div class="col-md-6 hidden-sm hidden-xs">
            <div class="phone-box">
                <iframe src="http://v2.hey-community.com"></iframe>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default panel-info">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12">
                            <h1 class="h2 text-center">HeyCommunity <sup>v2</sup></h1>
                            <p class="h4 text-center text-muted">线上社区解决方案</p>

                            <div class="row section-feature">
                                <div class="col-xs-4">
                                    <div class="feature-dev text-center">
                                        <i class="feature-icon fa fa-cloud"></i>
                                        <div class="feature-keyword">免费云社区</div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="feature-dev text-center">
                                        <i class="feature-icon fa fa-cube"></i>
                                        <div class="feature-keyword">精美 优雅</div>
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="feature-dev text-center">
                                        <i class="feature-icon fa fa-github" aria-hidden="true"></i>
                                        <div class="feature-keyword">GPL 开源</div>
                                    </div>
                                </div>
                            </div>

                            <div style="">
                                @if (Auth::guest())
                                    <a class="hidden btn-create btn btn-primary btn-block" data-toggle="modal" data-target="#signUpModal" href="#home">创建我的云社区</a>
                                    <a class="btn-create btn btn-primary btn-block">即将上线，敬请期待</a>
                                    <div style="margin-top:4px;">
                                        <a target="_blank" href="{{ url('https://github.com/dev4living/HeyCommunity') }}">获取程序代码</a>
                                        <a class="hidden" href="{{ url('/log-in') }}" class="pull-right">登录</a>
                                        <a target="_blank" href="{{ url('/bbs') }}" class="pull-right">用户社区</a>
                                    </div>
                                @else
                                    <a class="hidden btn-create btn btn-primary btn-block" href="{{ route('dashboard.home') }}">进入社区管理后台</a>
                                    <a class="btn-create btn btn-primary btn-block">即将上线，敬请期待</a>
                                    <div style="margin-top:4px;">
                                        <a target="_blank" href="{{ url('https://github.com/dev4living/HeyCommunity') }}">获取程序代码</a>
                                        <a target="_blank" href="{{ url('/bbs') }}" class="pull-right">用户社区</a>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default panel-news">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-xs-12">
                            新闻动态:
                            <ul class="list-unstyled">
                                <li>
                                    <a>HeyCommunity 重构并迁移到 Ionic 2</a>
                                    <span class="pull-right">06-30</span>
                                </li>
                                <li>
                                    <a>HeyCommunity v1.0.0-beta.2 发布</a>
                                    <span class="pull-right">05-24</span>
                                </li>
                                <li>
                                    <a>HeyCommunity v1.0.0-beta 发布</a>
                                    <span class="pull-right">04-20</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- cases -->
<div class="item" id="section-cases">
    <div>
        <h2>场景和案例</h2>

        <div class="row">
            <div class="item-case text-center col-sm-6 col-md-4">
                <iframe src="http://hxtrans.hey-community.cn"></iframe>
            </div>
            <div class="item-case text-center col-sm-6 col-md-4">
                <iframe src="http://www.hey-ganzhou.com"></iframe>
            </div>
        </div>
    </div>
</div>


<!-- service & price -->
<div class="item" id="section-prod">
    <div>
        <h2>产品与服务</h2>

        <h3>## HeyCommunity 云社区 <sup>V2</sup> <small>免费</small></h3>
        <div>
            即将上线，敬请期待 ...
            <br>
            <br>
        </div>

        <h3>## 技术服务</h3>
        <div>
            开源的 HeyCommunity(GPLv3授权)，适配于 iOS app / android app / window phone app / web app / 微信网页应用 等 <br>
            你可以基于它进行二次开发，构建你的社区 app <br>
            如果有需要，我们很乐意帮助你，定制开发你的社区 app
            <br>
            <br>
        </div>

        <h3>## 社区运营服务</h3>
        <div>
            敬请期待 ... <br>
            如果迫不及待那就在用户社区或 QQ 群与我们一起交流学习吧
        </div>
    </div>
</div>


<!-- About us -->
<div class="item" id="section-about">
    <div>
        <h2>关于我们</h2>
        <p>
            嗯，我们先保持神秘
        </p>

        <div style="margin-top:30px" class="h4">联系方式</div>
        <div>
            <div style="font-size:16px; margin-top:4px;">罗德</div>
            Email: supgeek.rod(AT)gmail.com <br>
            Phone: 170-9040-2884 <br>
            WeChat: 170-9040-2884 <br>
            QQ群: 242078519 <br>

            <br>
            如果任何需要，请联系我们
        </div>
    </div>
</div>

