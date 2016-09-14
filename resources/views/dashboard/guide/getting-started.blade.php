@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-2">
            @include('dashboard.guide._sidenav')
        </div>

        <div class="col-sm-10">
            <div id="section-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">HeyCommunity</a></li>
                    <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ url('/dashboard/guide') }}">Guide</a></li>
                    <li class="active">Getting started</li>
                </ol>
            </div>

            <div id="section-mainbody">
                Coming soon ...
            </div>
        </div>
    </div>
</div>
@endsection

