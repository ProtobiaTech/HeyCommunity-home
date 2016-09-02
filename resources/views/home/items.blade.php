<!-- Home -->
<div class="item active" id="section-home">
    <div class="row row-1">
        <div class="col-md-6 hidden-sm hidden-xs">
            <div class="phone-box">
                <iframe src="http://sns.hey-community.com"></iframe>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default panel-new-tenant">
                @if (Auth::guest())
                    <div class="panel-body">
                        <div class="hide col-xs-12">
                            <p class="h3 text-center">HeyCommunity <small>beta</small></p>
                            <p>HeyCommunity 正在进行公开测试，欢迎试用，遇到任何问题请向我们反馈</p>
                            <p>免费的 SaaS 云服务，敬请期待</p>
                            <hr style="margin:10px 0 15px">
                            <div>
                                <div style="margin-bottom:4px;">
                                    <span style="font-size:16px">HeyCommunity DEMO</span> &nbsp;
                                    <a target="_blank" href="http://demo.hey-community.com">webApp</a> <br>
                                </div>
                                <a target="_blank" href="https://itunes.apple.com/cn/app/heycommunity/id1093024405?l=en&mt=8">
                                    <img style="height:36px;" src="./assets/images/app-store.png">
                                </a>
                                <a target="_blank" href="http://pre.im/heycommunity">
                                    <img style="height:36px;" src="./assets/images/google-play.png">
                                </a>
                            </div>
                        </div>

                        <div class="col-xs-12">
                            <p class="h2 text-center">HeyCommunity</p>
                            <p class="visible-xs-block visible-sm-block">
                                欢迎使用 HeyCommuity 云服务，
                                在创建你的社区之前，你可以先<a href="http://demo.hey-community.com" target="_blank">体验一下</a>。
                            </p>
                            <p class="hidden-xs hidden-sm">
                                欢迎使用 HeyCommuity 云服务，
                                在创建你的社区之前，你可以在左侧的手机中体验一下。
                            </p>

                            <p>
                                如果你有社区运营和社区定制方面的需求请联系我们，也欢迎你向我们反馈意见和建议。
                            </p>

                            <div style="margin-top:15px;">
                                <a class="btn btn-primary btn-block" href="{{ '' }}">开始创建</a>
                                <div style="margin-top:4px;">
                                    <input class="" type="checkbox" checked>
                                    同意<a href="{{ url('terms-of-service') }}">《服务条款》</a>
                                    <a href="/admin/login" class="pull-right">登录</a>
                                </div>
                            </div>

                            <hr style="margin:10px 0 15px">
                            <div>
                                <div style="margin-bottom:4px;">
                                    <span style="font-size:16px">HeyCommunity DEMO</span> &nbsp;
                                    <a target="_blank" href="http://demo.hey-community.com">webApp</a> <br>
                                </div>
                                <a target="_blank" href="https://itunes.apple.com/cn/app/heycommunity/id1093024405?l=en&mt=8">
                                    <img style="height:36px;" src="./assets/images/app-store.png">
                                </a>
                                <a target="_blank" href="http://pre.im/heycommunity">
                                    <img style="height:36px;" src="./assets/images/google-play.png">
                                </a>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="panel-body">
                        <p class="text-center caption">哟，你有一个社区</p>
                        <div style="margin:0 30px;">
                            <p>
                                应用名称: <a target="_blank" href="http://{{ Auth::user()->domain }}">{{ Auth::user()->site_name }}</a> <br>
                            </p>
                            <p>
                                域名: <a target="_blank" href="http://{{ Auth::user()->domain }}">{{ Auth::user()->domain }}</a> <br>
                                子域名: <a target="_blank" href="http://{{ Auth::user()->sub_domain }}">{{ Auth::user()->sub_domain }}</a>
                            </p>

                            <hr style="margin:15px 0;">
                            <div>
                                进入<a class="" href="{{ route('admin.home') }}">仪表盘</a>, 你也可以 <a href="{{ route('admin.auth.logout') }}">登出</a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>

<div id="wechat-qrcode-modal" class="modal fade" tabindex="99999" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">HeyCommunity</h4>
            </div>
            <div class="modal-body">
                <p>
                    感谢你对 HEY 社区的关注与支持，欢迎你加入我们的用户 QQ 群，关注我们的微信公众号。 <br>
                    欢迎你向我们反馈意见和建议。
                </p>
                <p></p>
                <div>
                    <strong>QQ群:</strong>
                    <a target="_blank" href="http://shang.qq.com/wpa/qunwpa?idkey=a4df0bb81f8fc2f749a44a3fa0909179970c7cf828984d819ae6e236296f48cb">
                        🏡 HeyCommunity.com
                        (242078519)
                    </a>
                </div>

                <div>
                    <strong>微信公众号:</strong>
                    <a href="#">HEY社区</a>
                    <img style="width:120px; vertical-align:top; margin-top:-5px;" src="/assets/images/wechat-qrcode.jpg">
                </ul>
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

<!-- Jobs -->
<div class="item" id="section-jobs">
    <div>
        <h2>工作机会 <small>(远程工作)</small></h2>
        <div>
            <div class="h3">IONIC 工程师</div>
            <div>
                需求掌握 Ionic framework / AngularJS / HTML / CSS / JS 等编程技术 <br>
                1年以上开发经验，能够快速上手项目 <br>
                月薪 5k - 10k
            </div>

            <div class="h3">全栈工程师</div>
            <div>
                需要掌握前端和后端开发，以及 linux 服务器操作 等技能，最重要的是有卓越的学习能力和解决问题能力 <br>
                2年以上开发经验 <br>
                技术关键字: linux / laravel / ionic / angularJs / html / sass <br>
                月薪 7k - 15K
            </div>

            <div class="h3">兼职</div>
            <div>
                需要各 产品 / 设计 / 运营 / 市场方面技能的优秀人才 <br>
                2年以上工作经验
            </div>

            <div style="margin-top:30px;">
                ps. <br>
                以上为远程工作，工作时间为每周 40 小时 <br>
                加分项: github 上有开源项目 / 热爱编程开发 / 自主能力强 / 有创业想法 <br>
                简历请发: rod(AT)protobia.tech （请认真编写简历，并谈谈对这项工作的想法） <br>
            </div>
        </div>
    </div>
</div>
