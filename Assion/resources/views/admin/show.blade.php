@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">资讯展示</div>
                    <div class="panel-body">
                        <img src="{{URL('/picture/myBlogPicture.jpg')}}" alt="" style="width: 200px; height: 200px">
                    </div>

                    <div class="panel-body">
                       欢迎查看详情
                    </div>


                    <div class="panel-body">
                        title：{{ $show->view_title}}
                    </div>

                    <div class="panel-body">
                        简介：{{ $show->view_introduction }}
                    </div>

                    <div class="panel-body">
                        内容：{{ $show->view_content  }}
                    </div>

                    <div class="panel-body">
                        {{--你的身份：{{  }} --}}
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection