@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">教务在线</div>
                    <div class="panel-body">
                        <img src="{{URL('/picture/myBlogPicture.jpg')}}" alt="" style="width: 200px; height: 200px">
                    </div>

                    <div class="panel-body">
                        下面是新闻内容
                    </div>
                    @foreach ($lession as $num)
                        <hr>
                        <div class="page">
                            <h4>{{ $num->view_title }}</h4>
                            <div class="content">
                                <p>
                                    {{ $num->view_introduction }}
                                </p>
                            </div>
                            <div class="content">
                                <p>
                                    作者：{{ $num->user_name }}
                                </p>
                            </div>
                        </div>
                        <a href="{{URl('admin/show/'.$num->id)}}" class="btn btn-success">查看详细</a>
                    @endforeach





                </div>
            </div>
        </div>
    </div>
@endsection