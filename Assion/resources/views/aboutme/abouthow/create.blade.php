
{{--/**--}}
 {{--* Created by PhpStorm.--}}
 {{--* User: ASUS--}}
 {{--* Date: 2015/8/30--}}
 {{--* Time: 10:16--}}
 {{--*/--}}
@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">新增 教案</div>

                    <div class="panel-body">

                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ URL('aboutme/abouthow') }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <p>Please input your view's title</p>
                            <input type="text" name="view_title" class="form-control" required="required">
                            <br>
                            <textarea name="view_introduction" rows="10" class="form-control" required="required"></textarea>
                            <br>
                            <p>请输入你的提纲：</p>
                            <textarea name="view_content" rows="10" class="form-control" required="required"></textarea>
                            <br>
                            <p>请输入你的内容：</p>
                            <button class="btn btn-lg btn-info">新增教案</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection