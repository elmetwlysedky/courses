@extends('Site.Layouts.master')


@section('content')
    <div class="profile-content empty-course">
        <div class="container">
            <div class="right_tap-box col-md-3 col-xs-12 hidden-xs hidden-sm pull-right">
                <div class="right_box-inner">
                    <!-- Nav tabs -->
                    <a class="toggle-slidenav hidden-xs hidden-sm">
                        <i class="fa fa-close"></i>
                    </a>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">

                            <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                                <i class="fa fa-user"></i> الملف الشخصي
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#password" aria-controls="password" role="tab" data-toggle="tab">
                                <i class="fa fa-lock"></i> كلمة المرور
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#courses" aria-controls="courses" role="tab" data-toggle="tab">
                                <i class="fa fa-database"></i> الدورات
                            </a>
                        </li>

                        <li role="presentation">
                            <a href="#interests" aria-controls="interests" role="tab" data-toggle="tab">
                                <i class="fa fa-diamond"></i> الاهتمامات
                            </a>
                        </li>

                        <li role="presentation">
                            <a href="#cv" aria-controls="cv" role="tab" data-toggle="tab">
                                <i class="fa fa-file-text-o"></i> السيرة الذاتية
                            </a>
                        </li>

                        <li role="presentation">
                            <a href="#my_courses" aria-controls="my_courses" role="tab" data-toggle="tab">
                                <i class="fa fa-folder-open-o"></i> دوراتي كمتدرب
                            </a>
                        </li>

                        <li role="presentation">
                            <a href="#my_certf" aria-controls="my_certf" role="tab" data-toggle="tab">
                                <i class="fa fa-table"></i> شهاداتي كمتدرب
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- /.right_box-inner -->
            </div>
            <!-- /.right_tap-box -->

            <div class="mobile_tap-box col-md-12 col-xs-12 hidden-lg text-center">
                <div class="right_box-inner">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">

                            <a href="#home" aria-controls="home" role="tab" data-toggle="tab" title="الملف الشخصي">
                                <i class="fa fa-user"></i>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#password" aria-controls="password" role="tab" data-toggle="tab" title="كلمة المرور">
                                <i class="fa fa-lock"></i>
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#courses" aria-controls="courses" role="tab" data-toggle="tab" title="الدورات">
                                <i class="fa fa-database"></i>
                            </a>
                        </li>

                        <li role="presentation">
                            <a href="#interests" aria-controls="interests" role="tab" data-toggle="tab" title="الاهتمامات">
                                <i class="fa fa-diamond"></i>
                            </a>
                        </li>

                        <li role="presentation">
                            <a href="#cv" aria-controls="cv" role="tab" data-toggle="tab" title="السيرة الذاتية">
                                <i class="fa fa-file-text-o"></i>
                            </a>
                        </li>


                        <li role="presentation">
                            <a href="#my_courses" aria-controls="my_courses" role="tab" data-toggle="tab" title="دوراتي كمتدرب">
                                <i class="fa fa-folder-open-o"></i>
                            </a>
                        </li>

                    </ul>
                </div>
                <!-- /.right_box-inner -->
            </div>
            <!-- /.mobile_tap-box -->

            <div class="left_tap-box col-md-9 col-xs-12 pull-left">
                <div class="left_box-inner">
                    <!-- Tab panes -->
                    <div class="tab-content">

                        @include('Site.Profile.home')

                        @include('Site.Profile.password')

                        @include('Site.Profile.courses')

                        @include('Site.Profile.cv')

                        @include('Site.Profile.interest')

                        @include('Site.Profile.my_courses')

                        @include('Site.Profile.my_crtf')

                    </div>
                    <!-- /.tap-content -->
                </div>
                <!-- /.left_tap-box -->
            </div>
            <!-- /.left_tap-box -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.profile-content -->
    <div class="courses">
        <div class="container">
            <div class="courses-head text-center">
                <h1>دوراتي </h1>
            </div>
            <!-- /.testominal-head -->
            <div class="row block-container">
                @foreach(auth()->user()->courses as $my_course)
                    <div class="block col-md-4">
                        <figure>
                            <div><img src="/storage/{{$my_course->image}}" alt="img05" class="img-responsive"></div>
                            <figcaption class="text-right">
                                <h1>
                                    <label>اسم الكورس</label>
                                    <span>{{$my_course->title}}</span>
                                </h1>
                                <h1>
                                    <label>اسم المدرس</label>
                                    <span>{{$my_course->teacher->name}}</span>

                                </h1>
                                <h1>
                                    <label>عدد الطلبة المشتركة</label>
                                    <span>{{$my_course->users->count()}}</span>

                                </h1>
                                <h1>
                                    <label>تاريخ بداية الكورس</label>
                                    <span>{{$my_course->created_at->format('d/m/Y')}}0</span>

                                </h1>
                                <h1>
                                    <label>تقييم الكورس</label>
                                    <span>جيد</span>

                                </h1>
                                <a href="{{route('course.intro',$my_course->id)}}">
                                    <i class="fa fa-eye"></i> مشاهدة الكورس
                                </a>
                            </figcaption>
                        </figure>
                    </div>
            @endforeach

            <!-- /.block -->


            </div>
            <!-- /.row -->

            <div class="all-courses text-center">
                <a href="{{route('site.course.all')}}">عرض جميع الكورسات</a>

            </div>
            <!-- /.all-courses -->

        </div>
        <!-- /.conainer -->
    </div>


@stop




