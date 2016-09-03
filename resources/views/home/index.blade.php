@extends('layouts.default-home')

@section('content')
    <div id="main-carousel" class="carousel slide" data-interval="false" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            @include('home.items')
        </div>
    </div>
    <div class="main-carousel-bg"></div>


    <div id="signUpModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">创建一个云社区</h4>
                </div>
                <div class="modal-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    {!! Form::open(array('url' => '/log-in', 'method' => 'post', 'class' => 'form form-horizontal')) !!}
                    <div class="container-fluid">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="title">应用名称</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="site_name" value="{{ old('site_name') }}" placeholder="应用名称">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="title">域名</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon1">http://</span>
                                    <input class="form-control" type="text" name="domain" value="{{ old('domain') }}" placeholder="site-domain.com">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="title">子域名</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon1">http://</span>
                                    <input class="form-control" type="text" name="sub_domain" value="{{ old('sub_domain') }}" placeholder="sub-domain">
                                    <span class="input-group-addon" id="sizing-addon1">.hey-community.com</span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="title">管理员邮箱</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="email" value="{{ old('email') }}" placeholder="admin@hey-community.com">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="title">管理员手机</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="phone" value="{{ old('phone') }}" placeholder="13112341234">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="title">管理员密码</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="password" name="password" value="{{ old('password') }}" placeholder="管理员密码">
                            </div>
                        </div>



                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3">
                                <button type="submit" class="btn btn-primary btn-block">提交</button>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
