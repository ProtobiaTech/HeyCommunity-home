@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-2">
            @include('dashboard.setting._sidenav')
        </div>

        <div class="col-sm-9">
            <div id="section-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">HeyCommunity</a></li>
                    <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ url('/dashboard/setting') }}">Setting</a></li>
                    <li class="active">Edit Tenant Info</li>
                </ol>
            </div>

            <div id="section-mainbody">
                <p class="h3 text-center">Edit Wechat Public Account</p>

                {!! Form::open(array('url' => '/dashboard/setting/update-wechat-pa', 'method' => 'post', 'class' => 'form form-horizontal', 'files' => true)) !!}
                    <div class="form-group {{ $errors->has('wx_app_id') ? 'has-error' : '' }}">
                        <label for="input-wx-app-id" class="col-sm-2 control-label">App ID</label>
                        <div class="col-sm-10">
                            <input type="string" name="wx_app_id" class="form-control" id="input-wx-app-id" placeholder="" value="{{ old('wx_app_id', $tenant->info->wx_app_id) }}">
                            @if ($errors->has('wx_app_id'))
                            <div class="help-block">{{ $errors->first('wx_app_id') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('wx_app_secret') ? 'has-error' : '' }}">
                        <label for="input-wx-app-secret" class="col-sm-2 control-label">App Secret</label>
                        <div class="col-sm-10">
                            <input type="string" name="wx_app_secret" class="form-control" id="input-wx-app-secret" placeholder="" value="{{ old('wx_app_secret', $tenant->info->wx_app_secret) }}">
                            @if ($errors->has('wx_app_secret'))
                            <div class="help-block">{{ $errors->first('wx_app_secret') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('enable_wechat_pa') ? 'has-error' : '' }}">
                        <label for="input-enable" class="col-sm-2 control-label">Enable</label>
                        <div class="col-sm-10">
                            <div class="radio radio-inline">
                              <label>
                                <input type="radio" name="enable_wechat_pa" value="1" {{ old('enable_wechat_pa', $tenant->enable_wechat_pa) ? 'checked' : '' }}> Yes
                              </label>
                            </div>
                            <div class="radio radio-inline">
                              <label>
                                <input type="radio" name="enable_wechat_pa" value="0" {{ old('enable_wechat_pa', $tenant->enable_wechat_pa) ? '' : 'checked' }}> No
                              </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('wx_verify_file') ? 'has-error' : '' }}">
                        <label for="input-wx-verify-file" class="col-sm-2 control-label">MP_verify file</label>
                        <div class="col-sm-10">
                            <input type="file" name="wx_verify_file" class="form-control" id="input-wx-verify-file">
                            @if ($errors->has('wx_verify_file'))
                            <div class="help-block">{{ $errors->first('wx_verify_file') }}</div>
                            @endif
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('wx_temp_notice_id') ? 'has-error' : '' }}">
                        <label for="input-wx-app-id" class="col-sm-2 control-label">TmlNotice ID</label>
                        <div class="col-sm-10">
                            <input type="string" name="wx_temp_notice_id" class="form-control" id="input-wx-app-id" placeholder="" value="{{ old('wx_temp_notice_id', $tenant->info->wx_temp_notice_id) }}">
                            <div class="help-block">Please use "IT科技 - IT软件与服务: 新邮件通知" Template</div>
                            @if ($errors->has('wx_temp_notice_id'))
                            <div class="help-block">{{ $errors->first('wx_temp_notice_id') }}</div>
                            @endif
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-block btn-default">Save</button>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection

