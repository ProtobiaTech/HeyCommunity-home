@extends('layouts.default-home')

@section('content')
<div id="learn-more">
  <div class="desc-row">

    <h3>
        绑定微信公众号
    </h3>
    <p>
        以 WebApp 的形式运行在微信中，享受 微信授权登录 和 微信消息推送的便利
    </p>

  </div>

  <div class="feature-row img-performance">
    <h4>一分钟上线</h4>
    <p>
      Speed is important. So important that you only notice when it isn't there. Ionic is
      built to perform and behave great on the latest mobile devices. Designed with best practices like efficient <span class="feature-row-strong">hardware accelerated transitions</span>, and <span class="feature-row-strong">touch-optimized gestures</span>,
      one thing is for sure: You'll be impressed.
    </p>
  </div>

  <div class="feature-row img-angular img-right">
    <h4>微信授权登录</h4>
    <p>
      <span class="feature-row-strong">A match made in heaven.</span> Ionic builds on top of Angular
      to create a powerful SDK well-suited for building rich and robust mobile apps for the app store and the mobile web. Ionic not only looks nice, but its core architecture is built for <span class="feature-row-strong">serious app development</span>.
    </p>
  </div>

  <div class="feature-row img-native">
    <h4>微信消息推送</h4>
    <p>
      Ionic follows standard native mobile app UI guidelines and uses native SDKs, bringing the UI standards and device features of native apps together with the full power and flexibility of the open web.

      Ionic uses <a href="http://cordova.apache.org/" target="_blank">Cordova</a> or
      <a href="http://phonegap.com/" target="_blank">Phonegap</a> to deploy natively, or runs in the browser as a Progressive Web App. <span class="feature-row-strong">Develop once, deploy <em>everywhere</em></span>.
    </p>
  </div>
</div>



<div class="features">
  <div class="container">
    <h2>开始注册</h2>
    <h4 style="margin-bottom:20px;">
      You'll find a suite of mobile development tools and resources at your disposal that make <br>
      Ionic the complete mobile dev package. It's the best way to build apps. Period.
    </h4>
    <div class="row">
      <div class="col-md-offset-3 col-md-6">
        <form class="">
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="hide form-text text-muted">We'll never share your email with anyone else.</small>
          </div>

          <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit">提交</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
