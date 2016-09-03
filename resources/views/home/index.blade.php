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
                    <!-- form js -->
                    <script>
                        function signUpSubmit(event) {
                            event.preventDefault();
                            $.ajax({
                                method: "POST",
                                url: event.target.action,
                                data: $(event.target).serialize(),
                                success: function() {
                                    location.reload();
                                },
                                error: function(ret) {
                                    signUpSubmitErrorHandler(ret.responseJSON);
                                },
                            });
                        }

                        $(function() {
                            $('.sign-up-form input').on('change', function(event) {
                                obj = $('.sign-up-form .form-group').has(event.target);
                                obj.removeClass('has-success');
                                obj.removeClass('has-error');
                                obj.find('.help-block').text('');
                                obj.find('.help-block').hide();
                            })
                        })

                        function signUpSubmitErrorHandler(data) {
                            $('.sign-up-form .form-group').removeClass('has-error');
                            $('.sign-up-form .form-group').addClass('has-success');
                            $('.sign-up-form .form-group .help-block').hide();

                            for (var field in data) {
                                obj = $('.sign-up-form .form-group').has("input[name=" + field + "]");
                                console.log(obj, field);
                                obj.removeClass('has-success');
                                obj.addClass('has-error');
                                obj.find('.help-block').text(data[field]);
                                obj.find('.help-block').show();
                            }
                        }
                    </script>

                    {!! Form::open(array('url' => '/sign-up', 'method' => 'post', 'class' => 'sign-up-form form form-horizontal', 'onsubmit' => 'signUpSubmit(event)')) !!}
                    <div class="container-fluid">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="title">应用名称</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="site_name" value="{{ old('site_name') }}" placeholder="应用名称">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="title">域名</label>
                            <div class="col-sm-9">
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon1">http://</span>
                                    <input class="form-control" type="text" name="domain" value="{{ old('domain') }}" placeholder="site-domain.com">
                                </div>
                                <span class="help-block"></span>
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
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="title">管理员邮箱</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="email" value="{{ old('email') }}" placeholder="admin@hey-community.com">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="title">管理员手机</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="text" name="phone" value="{{ old('phone') }}" placeholder="13112341234">
                                <span class="help-block"></span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label" for="title">管理员密码</label>
                            <div class="col-sm-9">
                                <input class="form-control" type="password" name="password" value="{{ old('password') }}" placeholder="管理员密码">
                                <span class="help-block"></span>
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
