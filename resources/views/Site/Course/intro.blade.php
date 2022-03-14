@extends('Site.layouts.master')

@section('title')   @endsection

@section('content')


    <div class="intro-box">
        <div class="container">
            <div class="intro-name text-right">
                <div class="name-head col-md-7 col-xs-12 pull-right">
                    <h1>{{$course->title}}</h1>
                </div>
                <div class="extras col-md-5 col-xs-12">
                    <span>$ {{$course->price}}</span>
                    <div class="intro-rating">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-star"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-star-half-o"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- end intro-rating -->
                </div>
            </div>
            <!-- /.intro-name -->
            <div class="intro-video col-xs-12 text-center">
                <video id="example_video_1" class="video-js vjs-default-skin" controls="true" width="100%" height="520" poster="/storage/{{$course->image}}">
                    <source src="/storage/{{$course->video_intro}}" type='video/mp4' />
                </video>
            </div>
            <!-- /.intro-video -->
            <div class="intro-date col-xs-12 text-right">
                <h1>
                    <i class="fa fa-calendar"></i>
                    من : 01 فبراير 2016 إلى : 27 ابريل 2016 (12 اسبوع)
                </h1>

                @if ($course->teacher_id ==Auth::id())
                    <a href="{{route('site.course.edit',$course->id)}}" >
                        <i class="fa fa-cog"></i> تعديل الدورة
                    </a>
                @else
                <a href="#" class="show-credit">
                    <i class="fa fa-paper-plane"></i> إشترك في الدورة
                </a>
                <a href="profile1.html">
                    <i class="fa fa-cog"></i> عدل ملفك الشخصي لتستطيع الاشتراك في الدورة
                </a>
                @endif
            </div>
            <!-- /.intro-date -->
            <div class="intro-details text-right">
                <p>{{$course->description}}</p>
            </div>
            <!-- /.intro-details -->

            <div class="intro-extra col-xs-12">
                <div class="intro-instructor col-md-6 col-xs-12 text-right pull-left">
                    <div class="intro_instructor-inner">
                        <h1>عن المدرس</h1>
                        <div class="avatar text-center">
                            <div class="av-inner">
                                <img src="/storage/{{$course->teacher->avatar}}" alt="" width="80" height="80">
                            </div>
                            <!-- /.av-inner -->
                        </div>
                        <!-- /.avatar -->
                        <div class="instructor-data">
                            <a href="#" class="know-teacher" data-toggle="tooltip" data-placement="top" title="اضغط لمعرفة هوية المحاضر">{{$course->teacher->name}}</a>
                            <p>أستاذ مساعد في كلية الحاسب في جامعة الملك سعود ومستشار لامن المعلومات في مركز التميز لأمن المعلومات في الجامعة حاصل على شهادة البكالوريوس في علوم الحاسب بتقدير امتياز مع مرتبة الشرف الاولى من جامعة الملك سعود حاصل على جائزة الطالب المثالي في جامعة الملك سعود لعام ٢٠٠٣ </p>
                        </div>
                        <!-- /.instructor-data -->
                    </div>
                    <!-- /.intro_instructor-inner -->
                </div>
                <!-- /.intro-instructor -->
                <div class="intro-lec col-md-6 col-xs-12 text-right pull-right">

                    <div class="intro_lec-inner">
                        <h1>ماذا يحتوي هذا الكورس</h1>
                        <ol>

                            @foreach($course->lesson as $item)
                            <li>
                                <i class="fa fa-play-circle"></i>{{$item->name}}
                            </li>

                            @endforeach

                        </ol>
                    </div>

                    <!-- /.intro_lec-inner -->
                </div>
                <!-- /.intro-lec -->
            </div>
            <!-- /.intro-extra -->
        </div>
        <!-- /.container -->
    </div>

@endsection

@section('footer')



    <div class="panel-pop modal" id="instructor">
        <div class="intro-instructor col-xs-12 text-right">
            <div class="intro_instructor-inner">
                <h1>عن المدرس</h1>
                <div class="avatar text-center">
                    <div class="av-inner">
                        <img src="/storage/{{$course->teacher->avatar}}" alt="" width="80" height="80">
                    </div>
                    <!-- /.av-inner -->
                </div>
                <!-- /.avatar -->
                <div class="instructor-data">
                    <a>{{$course->teacher->name}}</a>
                    <p>{{$course->teacher->email}}</p>
                    <p>{{$course->teacher->degree}}</p>
                    <p>{{$course->teacher->employment}}</p>
                    <p>{{$course->teacher->specialization}}</p>
                </div>
                <!-- /.instructor-data -->
            </div>
            <!-- /.intro_instructor-inner -->
        </div>
        <!-- /.intro-instructor -->
    </div>


    <script type="text/javascript">
        var myPlayer = videojs("example_video_1");

        $('#show-l10').click(function () {
            $('#l10').show();
            $('#example_video_1').hide();
            myPlayer.pause();
        });
    </script>

@endsection
