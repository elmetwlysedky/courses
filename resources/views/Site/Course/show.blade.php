@extends('Site.Layouts.master')

@section('title')   @stop

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
                    @if(isset($success))
                        <div class="alert alert-success text-center">
                            تم الدفع بنجاح
                        </div>
                    @endif



                    <ul>
                        @if ($course->teacher_id ==Auth::id())
                        <li>
                            <a href="#" class="add-alert-form">
                                <i class="fa fa-bullhorn"></i> إضافة تنويه
                            </a>
                        </li>
                        <li>
                            <a href="#" class="sent-all">
                                <i class="fa fa-envelope"></i> إرسال للجميع
                            </a>
                        </li>
                        @endif
                        <li>
                            <a href="course-page.html" class="active">
                                <i class="fa fa-tasks"></i> الدروس
                            </a>
                        </li>

                        <li>
                        <li>
                            <a href="{{route('comment.show',$course->id)}}">
                                <i class="fa fa-commenting-o"></i> النقاشات
                            </a>
                        </li>

                        <li>
                            <a href="{{route('notice.show',$course->id)}}">
                                <i class="fa fa-bell"></i> التنويهات
                            </a>
                        </li>
                        <li>

                            <a href="#" class="add-fav-dis" data-toggle="tooltip" data-placement="top" title="إضافة الي المفضلة">
                                <i class="fa fa-heart"></i>
                            </a>
                        </li>


                        <li class="rating" data-toggle="tooltip" data-placment="top" title="إضافة تقييم للدورة">
                            <div class="stars">
                                <form action="{{route('rate.store')}}" method="post" id="addStar">
                                @csrf
                                    <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                    <input type="hidden" name="course_id" value="{{$course->id}}">

                                    <input class="star star-5" id="star-5" type="radio" name="rate" value="5" @if($rate == 5) checked @endif/>
                                    <label class="star star-5" for="star-5"></label>
                                    <input class="star star-4" id="star-4" type="radio" name="rate" value="4" @if($rate == 4) checked @endif/>
                                    <label class="star star-4" for="star-4"></label>
                                    <input class="star star-3" id="star-3" type="radio" name="rate" value="3" @if($rate == 3) checked @endif />
                                    <label class="star star-3" for="star-3"></label>
                                    <input class="star star-2" id="star-2" type="radio" name="rate" value="2" @if($rate == 2) checked @endif/>
                                    <label class="star star-2" for="star-2"></label>
                                    <input class="star star-1" id="star-1" type="radio" name="rate" value="1" @if($rate == 1) checked @endif/>
                                    <label class="star star-1" for="star-1"></label>

                                </form>
                            </div>
                        </li>

                    </ul>
                    <!-- =========================================================================================================================================== -->

                    <div class="panel-pop modal" id="msg-all">
                        <div class="lost-inner">
                            <h1>
                                <i class="fa fa-envelope"></i>
                                إرسال لجميع الطلاب المشتركين في الدورة
                            </h1>
                            <div class="lost-item" id="messageTo">
                                <textarea placeholder="اكتب الرسالة هنا"></textarea>
                            </div>
                            <!-- /.lost-item -->
                            <div class="text-center">
                                <input type="submit" value="إرسال">
                            </div>
                            <!-- /.lost-item -->
                        </div>
                        <!-- /.lost-inner -->
                    </div>
                    <!-- /.modal -->

                    <!-- =========================================================================================================================================== -->

                    <div class="panel-pop modal" id="alert-all">
                        <form action="{{route('notice.store')}}" method="post">
                            @csrf
                            <input type="hidden" name="course_id" value="{{$course->id}}">
                        <div class="lost-inner">
                            <h1>
                                <i class="fa fa-envelope"></i>
                                اضافة تنويه للطلاب المشتركين في الدورة
                            </h1>
                            <div class="lost-item" id="alert-item">
                                <input type="text" placeholder="عنوان التنويه" name="title">
                            </div>
                            <!-- /.lost-item -->
                            <div class="lost-item" id="alert-item">
                                <textarea name="content" placeholder="مضمون التنويه"></textarea>
                            </div>
                            <!-- /.lost-item -->
                            <div class="text-center">
                                <input type="submit" value="نشر التنويه">
                            </div>
                            <!-- /.lost-item -->
                        </div>
                        <!-- /.lost-inner -->
                        </form>
                    </div>
                    <!-- /.modal -->

                    <!-- =========================================================================================================================================== -->
                </div>
                <!-- end container -->
            </div>
            <!-- end corse-nav -->
            <div class="lesson-box text-right">
                <div class="container">
                    <div class="certf text-center animated bounceIn">
                        <h1>تهانينا لقد  انتهيت من هذه الدورة بنجاح </h1>
                        <a href="{{route('download',$course->id)}}">
                            <i class="fa fa-print"></i> تستطيع طباعة الشهادة
                        </a>
                    </div>
                    <!-- end certf -->
                    @if($course->lesson->count()==0)
                    <div class="empty-msg text-center animated shake">
                        <h1>
                            <i class="fa fa-frown-o"></i>
                            لا يوجد دروس الان ولكن يمكنك الاشتراك في الدورة لحين بدأها
                        </h1>
                    </div>
                @else
                    <!-- end empty-msg -->
                    <div class="week-module text-right">
                        <h1>
                            <i class="fa fa-tasks"></i>
                            الاسبوع الاول
                        </h1>
                    </div>
                    <!-- end week-moduke -->
                    <ul>
                        @foreach($course->lesson as $lesson)
                        <li>
                            <a href="{{route('site.lesson.show',$lesson->id)}}" class="lesson-det">
                                <i class="fa fa-play-circle"></i>
                                <span class="lesson-name">{{$lesson->name}}</span>
                            </a>
                            <h3>{{$lesson->created_at->diffForHumans()}}</h3>
                            @if ($course->teacher_id ==Auth::id())
                            <a href="{{route('site.lesson.destroy',$lesson->id)}}" class="del-lesson" data-toggle="tooltip" data-placement="top" title="حذف الدرس">
                                <i class="fa fa-trash"></i>
                            </a>
                            @endif
                        </li>
                        @endforeach

                    </ul>

                    <div class="take-exam col-xs-12 text-center">
                        <a href="{{route('test.show',$course->id)}}">
                            <i class="fa fa-file-text-o"></i> ابدا الاختبار الان
                        </a>
                    </div>
                @endif
                    <!-- end take-exam -->
                </div>
                <!-- end container -->
            </div>
            <!-- end lesson-box -->
        </div>
        <!-- end corse-box -->

    </div>

@stop

@section('footer')

    <script>
        $('#addStar').change('.star', function(e) {
            $(this).submit();
        });
    </script>

@stop
