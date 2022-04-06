@extends('Site.layouts.master')

@section('title')   @endsection

@section('content')


    <div class="intro-box">
        <div class="container">
            <div class="intro-name text-right">
                <div id="showPayForm"></div>
                <div class="name-head col-md-7 col-xs-12 pull-right">
                    <h1>{{$course->title}}</h1>
                </div>
                <div class="extras col-md-5 col-xs-12">
                    <span id="price">$ {{$course->price}}</span>
                    <div class="intro-rating">
                        <ul>
                            @if($rate == 1)
                            <li>
                                <a href="#">
                                    <i class="fa fa-star"></i>
                                </a>
                            </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star-o"></i>
                                    </a>
                                </li> <li>
                                    <a href="#">
                                        <i class="fa fa-star-o"></i>
                                    </a>
                                </li> <li>
                                    <a href="#">
                                        <i class="fa fa-star-o"></i>
                                    </a>
                                </li> <li>
                                    <a href="#">
                                        <i class="fa fa-star-o"></i>
                                    </a>
                                </li>
                            @elseif($rate == 2)
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
                                        <i class="fa fa-star-o"></i>
                                    </a>
                                </li> <li>
                                    <a href="#">
                                        <i class="fa fa-star-o"></i>
                                    </a>
                                </li> <li>
                                    <a href="#">
                                        <i class="fa fa-star-o"></i>
                                    </a>
                                </li>
                            @elseif($rate == 3)
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
                                        <i class="fa fa-star-o"></i>
                                    </a>
                                </li> <li>
                                    <a href="#">
                                        <i class="fa fa-star-o"></i>
                                    </a>
                                </li>
                            @elseif($rate == 4)
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
                                        <i class="fa fa-star-o"></i>
                                    </a>
                                </li>
                            @elseif($rate == 5)
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
                                        <i class="fa fa-star"></i>
                                    </a>
                                </li>
                            @else
                                <li>
                                    <a href="#">
                                        <i class="fa fa-star-o"></i>
                                    </a>
                                </li><li>
                                    <a href="#">
                                        <i class="fa fa-star-o"></i>
                                    </a>
                                </li><li>
                                    <a href="#">
                                        <i class="fa fa-star-o"></i>
                                    </a>
                                </li><li>
                                    <a href="#">
                                        <i class="fa fa-star-o"></i>
                                    </a>
                                </li><li>
                                    <a href="#">
                                        <i class="fa fa-star-o"></i>
                                    </a>
                                </li>
                            @endif

                        </ul>
                    </div>


{{--                    <li class="intro-rating" data-toggle="tooltip" data-placment="top" title="إضافة تقييم للدورة">--}}
{{--                        <div class="stars">--}}

{{--                                @csrf--}}
{{--                                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">--}}
{{--                                <input type="hidden" name="course_id" value="{{$course->id}}">--}}

{{--                                <input class="star star-5" id="star-5" type="radio" name="rate" value="5" @if($rate == 5) checked @endif/>--}}
{{--                                <label class="star star-5" for="star-5"></label>--}}
{{--                                <input class="star star-4" id="star-4" type="radio" name="rate" value="4" @if($rate == 4) checked @endif/>--}}
{{--                                <label class="star star-4" for="star-4"></label>--}}
{{--                                <input class="star star-3" id="star-3" type="radio" name="rate" value="3" @if($rate == 3) checked @endif />--}}
{{--                                <label class="star star-3" for="star-3"></label>--}}
{{--                                <input class="star star-2" id="star-2" type="radio" name="rate" value="2" @if($rate == 2) checked @endif/>--}}
{{--                                <label class="star star-2" for="star-2"@if($rate == 2) checked @endif></label>--}}
{{--                                <input class="star star-1" id="star-1" type="radio" name="rate" value="1"/>--}}
{{--                                <label class="star star-1" for="star-1" @if($rate == 1) checked @endif></label>--}}


{{--                        </div>--}}
{{--                    </li>--}}
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
                    {{$course->created_at->diffForHumans()}}
                </h1>

                @if ($course->teacher_id ==Auth::id())
                    <a href="{{route('site.course.edit',$course->id)}}" >
                        <i class="fa fa-cog"></i> تعديل
                    </a>
                    <a href="{{route('site.course.destroy',$course->id)}}" >
                        <i class="fa fa-cog"></i> حذف
                    </a>
                    <a href="{{route('site.lesson.create',$course->id)}}" >
                        <i class="fa fa-cog"></i> اضافة درس
                    </a>
                @else
                <a  href="{{route('course.check',$course->id)}}" >
                    <i class="fa fa-paper-plane" ></i> إشترك في الدورة
                </a>
                <a href="{{route('profile')}}">
                    <i class="fa fa-cog"></i> عدل ملفك الشخصي لتستطيع الاشتراك في الدورة
                </a>
                @endif
            </div>


            <div id="showPayForm"> </div>

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
                            <p>{{$course->teacher->degree}}</p>
                            <p>{{$course->teacher->employment}}</p>
                            <p>{{$course->teacher->specialization}}</p>
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
                                <a href="{{route('site.lesson.show',$item->id)}}"> <i class="fa fa-play-circle"></i></a>{{$item->name}}
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


    <div class="panel-pop modal" id="payment">
        <div>
            <h1>
                <i class="fa fa-shopping-cart"></i>
                تأكيد الاشتراك في الكورس
            </h1>
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="" aria-controls="credit-card" role="tab" data-toggle="tab">
                        <i class="fa fa-credit-card"></i>Credit Card
                    </a>
                </li>
                <li role="presentation">
                    <a href="#paypal" aria-controls="paypal" role="tab" data-toggle="tab">
                        <i class="fa fa-paypal"></i> Paypal
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade active" id="credit-card">...</div>
                <div role="tabpanel" class="tab-pane fade" id="paypal">
                    <div class="paypal-box text-center">
                        <a  href="#">تأكيد الدفع من خلال البايبال</a>
                    </div>
                    <!-- end paypal-box -->
                </div>
            </div>

        </div>
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

