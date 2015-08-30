@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Home</div>
                    <div class="panel-body">
                        <img src="{{URL('/picture/myBlogPicture.jpg')}}" alt="" style="width: 200px; height: 200px">
                    </div>

                    <div class="panel-body">
                        You are logged in!
                    </div>


                    <div class="panel-body">
                        你的名字：{{ Auth::user()->name}}
                    </div>

                    <div class="panel-body">
                        你的邮箱：{{ Auth::user()->email }}
                    </div>

                    <div class="panel-body">
                        你的身份：{{ Auth::user()->identity }}
                    </div>

                    <div class="panel-body">
                        {{--你的身份：{{  }} --}}
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection