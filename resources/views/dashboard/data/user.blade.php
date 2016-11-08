@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-2">
            @include('dashboard.data._sidenav')
        </div>

        <div class="col-sm-10">
            <div id="section-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">HeyCommunity</a></li>
                    <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    <li><a href="{{ url('/dashboard/data') }}">Data</a></li>
                    <li class="active">User Data</li>
                </ol>
            </div>

            <div id="section-mainbody">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nickname</th>
                            <th>Avatar</th>
                            <th>Bio</th>
                            <th>gender</th>
                            <th>Timeline Num</th>
                            <th>Like Num</th>
                            <th>Comment Num</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->nickname }}</td>
                            <td>
                                <img style="height:20px" src="{{ \App\User::getAvatarUrl($user->avatar) }}">
                            </td>
                            <td>{{ $user->bio }}</td>
                            <td>{{ $user->gender }}</td>
                            <td>{{ $user->timelines->count() }}</td>
                            <td>{{ $user->timelineLikes->count() }}</td>
                            <td>{{ $user->timelineComments->count() }}</td>
                            <td>{{ $user->created_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div>
                    {{ $users->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

