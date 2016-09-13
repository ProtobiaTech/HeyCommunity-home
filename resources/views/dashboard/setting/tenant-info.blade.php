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
                    <li class="active">Tenant Info</li>
                </ol>
            </div>

            <div id="section-mainbody">
                <p class="h3 text-center">Tenant Info</p>

                <table class="table table-striped">
                    <tr>
                        <th style="width:10em;">Site Name</th>
                        <td>{{ $tenant->site_name }}</td>
                    </tr>
                    <tr>
                        <th style="width:10em;">Domain</th>
                        <td>{{ $tenant->domain }}</td>
                    </tr>
                    <tr>
                        <th style="width:10em;">Sub Domain</th>
                        <td>{{ $tenant->sub_domain }}</td>
                    </tr>
                    <tr>
                        <th style="width:10em;">Email</th>
                        <td>{{ $tenant->email }}</td>
                    </tr>
                    <tr>
                        <th style="width:10em;">Phone</th>
                        <td>{{ $tenant->phone }}</td>
                    </tr>
                    <tr>
                        <th style="width:10em;">Created At</th>
                        <td>{{ $tenant->created_at }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

