@extends('Site.Layouts.master')

@section('title')    @stop

@section('content')

    <div class="intro-container col-xs-12">
        <div class="intro-head text-center">
            <div class="container">
                <h1>{{$course->title}}</h1>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.intro-head -->

        <div class="corse-box col-xs-12">
            <div class="corse-nav text-center">
                <div class="container">
                    <ul>
                        <li>
                            <a href="{{route('site.course.show',$course->id)}}">
                                <i class="fa fa-tasks"></i> الدروس
                            </a>
                        </li>

                        <li>
                            <a href="{{route('comment.show',$course->id)}}">
                                <span class="padge">{{$course->comment->count()}}</span>
                                <i class="fa fa-commenting-o"></i> النقاشات
                            </a>
                        </li>

                        <li>
                            <a href="{{route('notice.show',$course->id)}}" class="active">
                                <span class="padge">{{$course->notice->count()}}</span>
                                <i class="fa fa-bell"></i> التنويهات
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- end container -->
            </div>
            <!-- end corse-nav -->

            <div class="lesson-box text-right">
                <div class="container">
            @if($course->notice->count()== 0)

                <div class="empty-msg text-center animated shake">
                    <h1>
                        <i class="fa fa-bell-slash"></i>
                        لا توجد تنويهات حتي الان
                    </h1>
                </div>
            @else


                    <div class="alert-box">
                        <div class="all-alerts col-xs-12 text-right">
                            <ul>
                                @foreach($course->notice as $notice)
                                <li>
                                    <h1>{{$notice->title}}</h1>
                                    <span>{{$notice->created_at->diffForHumans()}}</span>
                                    <p>{{$notice->content}}</p>
                                </li>

                                @endforeach
                            </ul>
                        </div>



                        @endif

                    </div>
                    <!-- end alert-box -->
                </div>
                <!-- end container -->
            </div>
            <!-- end lesson-box -->
        </div>
        <!-- end corse-box -->

    </div>


@stop
