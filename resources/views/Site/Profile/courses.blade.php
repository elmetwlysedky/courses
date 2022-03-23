<div role="tabpanel" class="tab-pane fade" id="courses">
    <div class="home-head">
        <h1>
            <i class="fa fa-database"></i>
            الدورات
        </h1>
        <a class="add1_course" href="{{route('site.course.create')}}">
            <i class="fa fa-plus"></i>إضافة دورة
        </a>
    </div>
    <!-- /.home-head -->

    <div class="home-content  pass-content col-xs-12">
        <div class="home_data col-md-12 pull-right text-right">


            <div class="shop-wrapper col-xs-12">

                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                    @foreach(auth()->user()->teacher as $course)
                        <div class="panel panel-default">
                            <div class="panel-heading" role="button" role="tab" id="headingOne" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                                <h4 class="panel-title">
                                    <a>
                                        <h5>
                                            <i class="fa fa-group"></i> 20
                                        </h5>
                                        {{$course->title}}
                                    </a>


                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    <div class="instructor-control text-center">

                                        <a href="{{route('test.create',$course->id)}}" class="btn-success">
                                            اضافة اختبار للدورة
                                        </a>

                                        <a href="{{route('site.course.destroy',$course->id)}}" class="delete-course">
                                            <i class="fa fa-trash"></i> حذف الدورة
                                        </a>
                                        <a href="#" class="add-course">
                                            <i class="fa fa-plus"></i> إضافة محاضرة
                                        </a>
                                        <a href="#" class="message-course">
                                            <i class="fa fa-envelope"></i> إرسال للجميع
                                        </a>
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
                                        <a href="{{route('site.course.edit',$course->id)}}" class="edit-course">
                                            <i class="fa fa-pencil"></i> تعديل الدورة
                                        </a>
                                        <a href="#" class="add-alert-form">
                                            <i class="fa fa-bullhorn"></i> إضافة تنويه
                                        </a>

                                        <!-- =========================================================================================================================================== -->

                                        <div class="panel-pop modal" class="alert-all">
                                            <div class="lost-inner">
                                                <h1>
                                                    <i class="fa fa-envelope"></i>
                                                    اضافة تنويه للطلاب المشتركين في الدورة
                                                </h1>
                                                <div class="lost-item" id="alert-item">
                                                    <input type="text" placeholder="عنوان التنويه">
                                                </div>
                                                <!-- /.lost-item -->
                                                <div class="lost-item" id="alert-item">
                                                    <textarea placeholder="مضمون التنويه"></textarea>
                                                </div>
                                                <!-- /.lost-item -->
                                                <div class="text-center">
                                                    <input type="submit" value="نشر التنويه">
                                                </div>
                                                <!-- /.lost-item -->
                                            </div>
                                            <!-- /.lost-inner -->
                                        </div>
                                        <!-- /.modal -->

                                        <!-- =========================================================================================================================================== -->
                                        <div class="add_lecture">
                                            <form action="{{route('site.lesson.store')}}" method="post">
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


                                                <input type="hidden" name="course_id" value="{{$course->id}}">

                                                <div class="lecture-item">
                                                    <h1>اسم الدرس</h1>
                                                    <input type="text" name="name" placeholder="اضف اسم المحاضرة">
                                                </div>
                                                <!-- /.lecture-item -->
                                                <div class="lecture-item">
                                                    <h1>اضف رابط خارجي للفيديو</h1>
                                                    <div class="add_cont text-right">
                                                        <label class="text-right">
                                                            <input type="checkbox" id="up-video">
                                                            <span>اذا أردت رفع فيديو من جهازك الشخصي</span>
                                                        </label>

                                                        <div class="videoUploaded col-xs-12 text-right">
                                                            <span><i class="fa fa-video-camera"></i> ارفع فيديو من جهازك</span>
                                                            <input type="file" class="uploaded" name="video">
                                                        </div>

                                                    </div>
                                                    <input type="text" placeholder="ادخل رابط فيديو" class="linked">
                                                </div>
                                                <!-- /.lecture-item -->
                                                <div class="lecture-item">
                                                    <h1>وصف الدرس</h1>
                                                    <textarea name="description" placeholder="اضف وصف المحاضرة"></textarea>
                                                </div>
                                                <!-- /.lecture-item -->
                                                <div class="lecture-item text-right">
                                                    <div class="fileUpload col-xs-12 text-right">
                                                        <span><i class="fa fa-file"></i> رابط أوراق العمل </span>
                                                        <input type="file" class="upload">
                                                    </div>
                                                    <span class="hint"> Image او Word او Powerpoint او Pdf الملفات يمكن ان تكون </span>
                                                </div>
                                                <!-- /.lecture-item -->
                                                <div class="lecture-item add-sorting">
                                                    <label>
                                                        <input  type="checkbox" id="sort-lesson">
                                                        <span>يجب تحديد ترتيب الدرس </span>
                                                        <input name="sequence" type="number" data-toggle="tooltip" data-placement="top" title="اكتب ترتيب الدرس بالأرقام" class="add_sort-number">
                                                    </label>
                                                </div>
                                                <!-- /.lecture-item -->
                                                <div class="lecture-item confirm-lec">
                                                    <input type="submit" value="إضافة محاضرة">
                                                </div>
                                                <!-- /.lecture-item -->

                                            </form>
                                        </div>
                                        <!-- /.add_lecture -->
                                    </div>
                                    <!-- /.instructor-control -->
                                    <ul>
                                        <li>
                                            <h1>
                                                <label>الوصف</label>
                                                <span class="par">{{$course->description}}</span>
                                            </h1>
                                        </li>
                                        <li>
                                            <h1>
                                                <label>المجال</label>
                                                @foreach($course->interests as $interes)
                                                    <span> {{$interes->name}}</span>,
                                                @endforeach
                                            </h1>
                                        </li>


                                        <li>
                                            <h1>
                                                <label>نشرت / لم تنشر</label>
                                                <span>{{$course->active_string}} </span>
                                            </h1>
                                        </li>
                                        <li>
                                            <h1>
                                                <label>الشهادة</label>
                                                <span>{{$course->id}}</span>
                                            </h1>
                                        </li>
                                        <li>
                                            <h1>
                                                <label>السعر</label>
                                                <span>{{$course->price}}</span>
                                            </h1>
                                        </li>
                                        <li>
                                            <h1>
                                                <label>التاريخ</label>
                                                <span> {{$course->created_at->format('d/m/Y')}}</span>
                                            </h1>
                                        </li>

                                        <li>
                                            <h1>
                                                <label>إسم المدرب</label>
                                                <span>{{$course->teacher->name}}</span>
                                            </h1>
                                        </li>
                                        <li>
                                            <h1>
                                                <label>عدد الدروس </label>
                                                <span>{{$course->lesson->count()}}</span>
                                            </h1>
                                        </li>

                                    </ul>
                                </div>
                                <!-- /.panel-body -->

                            </div>
                            <!-- /#collapseOne -->
                        </div>
                @endforeach
                <!-- /.panel-default -->


                </div>
                <!-- /.panel-group -->


            </div>

            <!-- end shop-wrapper -->
        </div>
        <!-- ./home_data -->
    </div>
    <!-- /.home-content -->
</div>
