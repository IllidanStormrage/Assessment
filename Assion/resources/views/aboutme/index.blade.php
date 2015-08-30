@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">我的提交</div>

                    <div class="panel-body">

                        <a href="{{ URL('aboutme/abouthow/create') }}" class="btn btn-lg btn-primary">新增</a>

                        @foreach ($youView as $array)
                            <hr>
                            <div class="page">
                                <h4>{{ $array->view_title }}</h4>
                                <div class="content">
                                    <p>
                                        {{ $array->view_introduction }}
                                    </p>
                                </div>
                                <div class="content">
                                    <p>
                                        作者：{{ $array->user_name }}
                                    </p>
                                </div>
                            </div>
                            <a href="{{ URL('admin/abouthow/'.$array->id.'/edit') }}" class="btn btn-success">编辑</a>

                            <form action="{{ URL('aboutme/abouthow/'.$array->id) }}" method="POST" style="display: inline;">
                                <input name="_method" type="hidden" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-danger">删除</button>
                            </form>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
