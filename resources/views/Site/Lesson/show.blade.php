@extends('Site.Layouts.master')

@section('title')  @stop


@section('content')

    <div class="intro-container">
        <div class="intro-head text-center">
            <div class="container">
                <h1>{{$lesson->name}}</h1>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.intro-head -->
        <div class="corse-indv">
            <div class="container">

                <!-- end mob-episodes -->
                <div class="corse_indv-video col-md-12 col-xs-12 text-center">
                    <div class="corse_indv-inner">

                        <video id="example_video_1" class="video-js vjs-default-skin" controls="true" width="100%" height="420" poster="/storage/{{$lesson->image}}">
                            <source src="/storage/{{$lesson->video}}" type='video/mp4' />
                        </video>
                        <div class="finish-corse text-left col-xs-12">
                            @if ($lesson->course->teacher_id ==Auth::id())

                                <a href="{{route('site.lesson.edit',$lesson->id)}}">
                                   تعديل الدرس
                                </a>

                                <a href="{{route('site.lesson.destroy',$lesson->id)}}" >
                                    <i class="fa fa-cog"></i> حذف
                                </a>

                            @elseif($lesson->end_lesson)
                                <a  class="btn-success">
                                     انهيت هذا الدرس
                                </a>
                            @else
                             <form action="{{route('end.lesson')}}" method="post" >
                                    @csrf

                                 @if ($errors->any())
                                     <div class="alert alert-danger">
                                         <ul>
                                             @foreach ($errors->all() as $error)
                                                 <li>{{ $error }}</li>
                                             @endforeach
                                         </ul>
                                     </div>
                                 @endif

                                 <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                 <input type="hidden" name="lesson_id" value="{{$lesson->id}}">

                              <button type="submit" class="btn btn-primary"> انهيت هذا الدرس</button>
                             </form>
                            @endif
                            <div class="lesson-desc col-xs-12 text-right">
                                <h1>وصف المحاضرة</h1>
                                <p>{{$lesson->description}}</p>
                            </div>
                        </div>
                        <!-- end finish-corse -->
                    </div>
                    <!-- end corse_indv-inner -->
                </div>
                <!-- end corse_indv-video -->

            </div>
            <!-- end container -->
        </div>
        <!-- end corse-indv -->
    </div>
    <!-- /.intro-container -->

@stop
