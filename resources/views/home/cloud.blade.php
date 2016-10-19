@extends('layouts.default-home')

@section('content')
<div class="container content-container">
  <div id="getting-started">
    <br>
    <br>
    <div class="text-center">
      <h2>一分钟上线你的云社区</h2>
      <p class="sub-heading">
        在微信运行云社区 <br>
        享受到 微信授权登录 和 微信消息推送 等功能带来的便捷
      </p>
    </div>
    <div class="row" id="first-step">
      <div class="col-md-6 step-desc">
        <div class="num">
          <img src="ionic-assets/img/docs/symbols/step-1@2x.png" width="52" height="52">
        </div>
        <div class="desc">
          <h3>注册云社区</h3>
          <p>
            花费一分钟的时间，认真填写右侧表单，然后点击提交 <br>
            提交后请检查表单是否有反馈错误信息，如果有，请修正后再次提交 <br>
            如果注册成功，请进入到第二步
          </p>
          <p>
            <i>
              <strong>注意:</strong>
              请如实填写管理员邮箱和管理员手机，我们会妥善保存不会透露给第三方，也不会向你发送垃圾信息 <br>
            </i>
            <i>
              <strong>提示:</strong>
              如暂无域名，域名字段可为空
            </i>
          </p>
        </div>
      </div>
      <div class="col-md-6 code">
          <form method="POST" action="http://www.hey-community.com/sign-up" class="form form-horizontal">
            <div class="form-group">
                <label class="col-sm-3 control-label" for="title">应用名称</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" name="site_name" value="" placeholder="应用名称">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for="title">域名</label>
                <div class="col-sm-9">
                    <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon1">http://</span>
                        <input class="form-control" type="text" name="domain" value="" placeholder="site-domain.com">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for="title">子域名</label>
                <div class="col-sm-9">
                    <div class="input-group">
                        <span class="input-group-addon" id="sizing-addon1">http://</span>
                        <input class="form-control" type="text" name="sub_domain" value="" placeholder="sub-domain">
                        <span class="input-group-addon" id="sizing-addon1">.hey-community.com</span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for="title">管理员邮箱</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" name="email" value="" placeholder="admin@hey-community.com">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for="title">管理员手机</label>
                <div class="col-sm-9">
                    <input class="form-control" type="text" name="phone" value="" placeholder="17090402884">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for="title">管理员密码</label>
                <div class="col-sm-9">
                    <input class="form-control" type="password" name="password" value="" placeholder="管理员密码">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label" for="title">重复管理员密码</label>
                <div class="col-sm-9">
                    <input class="form-control" type="password" name="password" value="" placeholder="管理员密码">
                </div>
            </div>


            <div class="form-group">
                <div class="col-sm-9 col-sm-offset-3">
                    <button type="submit" class="btn btn-primary btn-block">提交</button>
                </div>
            </div>
          </form>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 step-desc">
        <div class="num">
          <img src="ionic-assets/img/docs/symbols/step-2@2x.png" width="52" height="52">
        </div>
        <div class="desc">
          <h3>接入微信公众号</h3>
          <p>
            完成第一步后，登录<a href="https://mp.weixin.qq.com" target="_blank">微信公众平台</a>，在微信公众平台左侧导航区域点击 <strong>功能</strong> 栏目下的 <strong>自定义菜单</strong>
            进入到自定交菜单管理页面 <br>
            然后添加一个跳转到网页的菜单，作为社区的入口 <br>
            该网页地址完成上一步后，会在这里显示
          </p>
          <p>
            如果你的公众号获得了 <strong>业务通知</strong> 和 <strong>页授权获取用户基本信息</strong> 接口，那就可以在管理后台为你的社区关联你的微信公众号 <br>
            关系公众号之后，将可以使用你的公众号进行社区的 授权登录 和 消息推送
          </p>
          <i>
            更多关于公众号的知识请进入微信公众平台进行了解
          </i>
        </div>
      </div>
      <div class="col-md-6 code">
      </div>
    </div>


    <!-- -->
    <div class="row">
      <div class="col-md-6 step-desc">
        <div class="num">
          <img src="ionic-assets/img/docs/symbols/step-3@2x.png" width="52" height="52">
        </div>
        <div class="desc">
          <h3>开始使用</h3>
          <p>
            祝贺完成了云社区的部署工作，可能用了不止一分钟的时间？哈哈 ~ <br>
            现在你就可以使用这个线上社区了
          </p>
          <p>
            欢迎你加入我们 HeyCommunity 云社区用户QQ群，一起交流社区运营的知识
          </p>
        </div>
      </div>
      <div class="col-md-6 code">
      </div>
    </div>
  </div>


  <div id="getting-started-cont">
    <section class="container what-next">
      <hgroup>
        <h2>他们都在使用云社区</h2>
        <p class="hide">
          云社区
        </p>
      </hgroup>
      <div class="items">
        <div class="item" style="padding-top:0;">
          <h3>海峡交通迷社区</h3>
          <p>
            福建福州的一个交通迷俱乐部
            <br>
            <br>
            <br>
          </p>
          <span class="">
            <i class="ion-qr-scanner"></i> &nbsp;
            扫码进入该社区
          </span>
        </div>
        <div class="item" style="padding-top:0;">
          <h3>HEY 赣州</h3>
          <p>
            赣州实名同城社区 <br>
            三四线人口流动性较低，城市居民安生立身，过着平静的生活
          </p>
          <span class="">
            <i class="ion-qr-scanner"></i> &nbsp;
            扫码进入该社区
          </span>
        </div>
        <div class="item" style="padding-top:0;">
          <h3>HeyCommunity DEMO</h3>
          <p>
            HeyCommunity 产品演示社区 <br>
            通过这个社区，你可以体验到产品的各种功能 <br>
            但是，请不要发布不恰当或无意义的内容
          </p>
          <span class="">
            <i class="ion-qr-scanner"></i> &nbsp;
            扫码进入该社区
          </span>
        </div>
      </div>
    </section>
  </div>

  <div style="height:100px;"></div>
</div>
@endsection
