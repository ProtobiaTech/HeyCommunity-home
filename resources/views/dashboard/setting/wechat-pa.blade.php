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
                    <li class="active">Wechat PA</li>
                </ol>

                <div class="pull-right">
                    <a href="{{ url('dashboard/setting/edit-wechat-pa') }}" class="btn btn-default btn-sm">Edit</a>
                </div>
            </div>

            <div id="section-mainbody">
                <p class="h3 text-center">Wechat Public Account</p>

                <table class="table table-striped">
                    <tr>
                        <th style="width:10em;">App ID</th>
                        <td>
                            @if ($tenant->info && $tenant->info->wx_app_id)
                              {{ (substr($tenant->info->wx_app_id, 0, -8) . '********') }}
                            @else
                              null
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th style="width:10em;">App Secret</th>
                        <td>
                            @if ($tenant->info && $tenant->info->wx_app_secret)
                              {{ (substr($tenant->info->wx_app_secret, 0, -12) . '************') }}
                            @else
                              null
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th style="width:10em;">Enabled</th>
                        <td>
                          {{ $tenant->enable_wechat_pa ? 'Yes' : 'No'}}
                        </td>
                    </tr>
                    <tr>
                        <th style="width:10em;">TempNotice Id</th>
                        <td>
                            @if ($tenant->info && $tenant->info->wx_temp_notice_id)
                              {{ $tenant->info->wx_temp_notice_id }}
                            @else
                              null
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

