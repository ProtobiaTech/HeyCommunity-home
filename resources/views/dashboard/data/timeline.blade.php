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
                    <li class="active">Timeline Data</li>
                </ol>
            </div>

            <div id="section-mainbody">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Author</th>
                            <th>Content</th>
                            <th>Imgs</th>
                            <th>Like Num</th>
                            <th>Comment Num</th>
                            <th>Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($timelines as $timeline)
                        <tr>
                            <td>{{ $timeline->id }}</td>
                            <td>{{ $timeline->author->nickname }}</td>
                            <td>{{ $timeline->content }}</td>
                            <?php
                                $imgs = \App\TimelineImg::getImgs($timeline->imgs);
                            ?>
                            <td>
                                @foreach ($imgs as $img)
                                    <img style="width:60px" src="{{ $img->uri }}">
                                @endforeach
                            </td>
                            <td>{{ $timeline->like_num }}</td>
                            <td>{{ $timeline->comment_num }}</td>
                            <td>{{ $timeline->created_at }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div>
                    {{ $timelines->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

