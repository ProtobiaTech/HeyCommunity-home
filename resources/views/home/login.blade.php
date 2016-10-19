@extends('layouts.default-home')

@section('content')
<div id="getting-started">
  <br>
  <br>
  <br>
  <div class="text-center">
    <h2>登录云社区管理平台</h2>
    <p class="sub-heading">
      如果你忘记了密码，请与我们联系  &nbsp;&nbsp; : )
    </p>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-sm-offset-3">
        <br>
        <form method="POST" action="http://www.hey-community.com/sign-up" class="form form-horizontal">
          <div class="form-group">
              <label class="col-sm-3 control-label" for="title">管理员邮箱</label>
              <div class="col-sm-8">
                  <input class="form-control" type="text" name="email" value="" placeholder="admin@hey-community.com">
              </div>
          </div>

          <div class="form-group">
              <label class="col-sm-3 control-label" for="title">管理员密码</label>
              <div class="col-sm-8">
                  <input class="form-control" type="password" name="password" value="" placeholder="管理员密码">
              </div>
          </div>


          <div class="form-group">
              <div class="col-sm-8 col-sm-offset-3">
                  <button type="submit" class="btn btn-primary btn-block">提交</button>
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
