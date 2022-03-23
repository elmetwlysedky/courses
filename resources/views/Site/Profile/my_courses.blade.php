<div role="tabpanel" class="tab-pane fade" id="my_courses">
    <div class="home-head">
        <h1>
            <i class="fa fa-folder-open-o"></i>
            دوراتي
        </h1>
    </div>
    <!-- /.home-head -->
    <div class="home-content pass-content col-xs-12">
        <div class="home_data col-xs-12 pull-right text-right">
            <div class="my_courses-container">
                <div>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#currentmy" aria-controls="current" role="tab" data-toggle="tab">الدورات الحالية</a></li>
                        <li role="presentation"><a href="#commingmy" aria-controls="comming" role="tab" data-toggle="tab">الدورات القادمة</a></li>
                        <li role="presentation"><a href="#finishedmy" aria-controls="comming" role="tab" data-toggle="tab">الدورات المنتهية</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade in active" id="currentmy">
                            <div class="type col-xs-12">
                                <div class="filtered-head text-right">
                                    <h1>
                                        <i class="fa fa-tags"></i>
                                        تنمية بشرية
                                    </h1>
                                </div>
                                <!-- /.filtered-head -->
                                @foreach(auth()->user()->courses as $my_course)
                                <div class="card col-md-6 col-xs-12 pull-right">
                                    <div class="card-inner">
                                        <span class="corse-type">{{$my_course->title}}</span>
                                        <div class="card-img">

                                            <img src="" alt="" class="img-responsive">
                                            <div class="lessons-number text-center">
                                                <h1>
                                                    <i class="fa fa-play-circle"></i>
                                                    100
                                                </h1>
                                            </div>
                                            <!-- /.lessons-number -->
                                        </div>
                                        <!-- /.card-img -->
                                        <div class="card-data">
                                            <div class="course_name text-right">
                                                <h1>
                                                    <a href="#">{{$my_course->title}} </a>
                                                </h1>
                                            </div>
                                            <!-- /.course-name -->
                                            <div class="course_setting text-right">
                                                                            <span class="course_date">
                                                                                <i class="fa fa-calendar"></i>
                                                                                من {{$my_course->created_at->format('d/m/Y')}} إلى {{$my_course->updated_at->format('d/m/Y')}}
                                                                            </span>
                                            </div>
                                            <!-- /.course_setting -->
                                            <div class="course_instructor-data">
                                                                            <span>
                                                                                <img src="images/s.png" width="70" height="70" class="img-responsive">
                                                                            </span>
                                                <a href="#">
                                                    <i class="fa fa-user"></i> {{$my_course->teacher->name}}
                                                </a>
                                            </div>
                                            <!-- /.course_instructor-data -->
                                            <div class="corse-action">
                                                <a href="{{route('course.intro',$my_course->id)}}" class="gonna-corse">
                                                    <i class="fa fa-paper-plane"></i> إذهب الي الدورة
                                                </a>
                                                <a href="#" class="out-corse">
                                                    <i class="fa fa-sign-out"></i> إنسحاب من الدورة
                                                </a>
                                            </div>
                                            <!-- /.corse-action -->
                                        </div>
                                        <!-- /.card-data -->

                                    </div>
                                    <!-- /.card-inner -->
                                </div>
                                    <!-- /.card -->
                                @endforeach

                                <!-- /.card -->
                            </div>
                            <!-- /.type -->
                        </div>
                        <!-- /#currentmy -->
                        <div role="tabpanel" class="tab-pane fade" id="commingmy">
                            <div class="flash_empty text-center">
                                <h1 class="animated shake">
                                    <i class="fa fa-frown-o"></i>
                                    عفواً لا يوجد لديك دورات في هذا القسم
                                </h1>
                            </div>
                            <!-- /.flash_empty -->
                        </div>
                        <!-- /#commingmy -->
                        <div role="tabpanel" class="tab-pane fade" id="finishedmy">
                            <div class="flash_empty text-center">
                                <h1 class="animated shake">
                                    <i class="fa fa-frown-o"></i>
                                    عفواً لا يوجد لديك دورات في هذا القسم
                                </h1>
                            </div>
                            <!-- /.flash_empty -->
                        </div>
                        <!-- /#finishedmy -->
                    </div>

                </div>
            </div>
            <!-- /.my_courses-container -->
        </div>
        <!-- ./home_data -->
    </div>
    <!-- /.home-content -->
</div>
