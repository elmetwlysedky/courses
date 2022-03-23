@extends('Site.Layouts.master')

@section('title')  @stop

@section('content')

    <div class="intro-container col-xs-12">
        <div class="intro-head text-center">
            <div class="container">
                <h1>كورس البرمجة بلغة الجافا</h1>
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
                            <a href="{{route('comment.show',$course->id)}}" class="active">
                                <i class="fa fa-commenting-o"></i> النقاشات
                            </a>
                        </li>

                        <li>
                            <a href="{{route('notice.show',$course->id)}}">
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
                    <div class="comments-disqus">
                        <div class="empty-msg text-center animated shake">
                            <h1>
                                <i class="fa fa-frown-o"></i>
                                لا يوجد تعليقات حتى الاّن
                            </h1>
                        </div>
                        <!-- end empty-msg -->
                    </div>
                    <!-- end comments-disqus -->
                </div>
                <!-- end container -->
            </div>
            <!-- end lesson-box -->
        </div>
        <!-- end corse-box -->

    </div>
    <!-- /.intro-container -->

@stop
