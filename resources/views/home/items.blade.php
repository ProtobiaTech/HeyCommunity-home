<!-- Home -->
<div class="item active" id="section-home">
    <div class="row row-1">
        <div class="col-md-6 hidden-sm hidden-xs">
            <div class="phone-box">
                <iframe src="http://sns.hey-community.com"></iframe>
            </div>
        </div>

        <div class="col-md-6">
            @if (true || Auth::guest())
                <div class="panel panel-default panel-info">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12">
                                <p class="h2 text-center">HeyCommunity</p>
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
                                    <a class="btn-create btn btn-primary btn-block" href="{{ '' }}">创建我的云社区</a>
                                    <div style="margin-top:4px;">
                                        <a target="_blank" href="{{ url('https://github.com/dev4living/HeyCommunity') }}">获取程序代码</a>
                                        <a href="/admin/login" class="pull-right">登录</a>
                                    </div>
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
                                        <a href="/news/rework">HeyCommunity 重构并迁移到 Ionic 2</a>
                                        <span class="pull-right">06-30</span>
                                    </li>
                                    <li>
                                        <a href="/news/beta-two">HeyCommunity v1.0.0-beta.2 发布</a>
                                        <span class="pull-right">05-24</span>
                                    </li>
                                    <li>
                                        <a href="/news/beta-one">HeyCommunity v1.0.0-beta 发布</a>
                                        <span class="pull-right">04-20</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @else
            @endif
        </div>
    </div>
</div>


<!-- cases -->
<div class="item" id="section-cases">
    <div>
        <h2>场景和案例</h2>

        <div class="row">
            <div class="col-sm-6 col-md-4">
                <iframe src="http://hxtrans.hey-community.cn"></iframe>
                <div>交通爱好者俱乐部</div>
            </div>
            <div class="col-sm-6 col-md-4">
                <iframe src="http://www.hey-ganzhou.com"></iframe>
                <div>同城社区</div>
            </div>
        </div>
    </div>
</div>


<!-- service & price -->
<div class="item" id="section-prod">
    <div>
        <h2>产品与服务</h2>

        <h3>## HeyCommunity 云社区 <small>免费</small></h3>
        <div>
            DEMO: <a href="http://demo.hey-community.com">demo.hey-community.com</a> <br>
            立即创建: <a href="/admin/create-tenant">Create Tenant</a>
            <br>
            <br>
        </div>

        <h3>## 技术服务</h3>
        <div>
            我们开源（GPLv3授权）适配 iOS / android / window phone 的 hybrid app <br>
            你可以基于它进行二次开发构建自己的社区 app <br>
            如果有需要你也可以找我们为您定制开发你的社区 app，我们很乐意帮助到您
            <br>
            <br>
        </div>

        <h3>## 社区运营服务</h3>
        <div>
            同时，我们为有需要的用户提专业的社区运营服务 <br>
            欢迎联系我们
        </div>
    </div>
</div>


<!-- About us -->
<div class="item" id="section-about">
    <div>
        <h2>关于我们</h2>
        <p>
            HeyCommunity 是 protobia.tech 为中小社群提供的线上社区解决方案 <br>
            从 2015 年底开始，我们专注于移动社交领域 <br>
            致力于为中小社群的提供 免费 / 多元化 / 便捷好用 的线上社交服务 <br>
            让社群的优质内容得以沉淀，增长良好的社群社交氛围，让社群更具团结与凝聚
        </p>

        <p>
            protobia.tech 是一个远程协同工作团队，成员分布在大江南北五湖四海 <br>
            本着助力中小社群知识经验交流与精神文明建设的初心组成了一个团队 <br>
            团队成员均在互联网拥有丰富的从业经验，为了这项事业全力以赴
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

