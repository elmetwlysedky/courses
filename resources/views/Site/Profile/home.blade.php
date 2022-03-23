<div role="tabpanel" class="tab-pane fade in  active" id="home">
    <div class="home-head">
        <h1>
            <i class="fa fa-user"></i>
            الملف الشخصي




                <button class="edit-personal" type="button" data-toggle="modal" data-target="#edit">تعديل البيانات</button>


            <div id="edit" class="modal fade" role="dialog">

                {!! Form::model($user, ['route' => ['profile.update', $user->id],'class'=>'form-horizontal','method'=>'PATCH','enctype'=>'multipart/form-data','file'=>true]) !!}

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                @include('Site.Profile.edit')

                {!! Form::close() !!}

            </div>
            <button class="cancel-personal" type="reset">
                <i class="fa fa-times"></i>
                إلغاء التعديل
            </button>
        </h1>
    </div>
    <!-- /.home-head -->

    <div class="home_img  text-center">
        <div class="home_img-inner">
            <div class="left-caption col-xs-12">
                <div class="imgcontent col-xs-12">
                    <div class="bstext">
                                                    <span>
                                          <i class="fa fa-camera"></i><br>
                                          Upload an image
                                      </span>
                    </div>
                    <!-- /.bstext -->
                    <output id="list"></output>
                    <input type="file" id="show-adj8" name="myFileSelect">
                </div>
                <!-- /.imgcontent -->
            </div>
            <!-- /.Fption -->
            <img src="/storage/{{auth()->user()->avatar}}" alt="" width="150" height="150">
        </div>
    </div>
    <!-- /.home_img -->
    <div class="home-content">

        <div class="home_data col-md-10 col-sm-10 col-xs-12 text-right">
            <form action="#" method="get">
                <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                    <div>
                        <i class="fa fa-user-secret"></i>
                        <h1>الإسم بالكامل</h1>
                        <input type="text" id="edit-area" placeholder="الإسم بالكامل">
                        <span>{{auth()->user()->name}}</span>
                    </div>
                </div>
                <!-- /.home_data-item -->


                <!-- /.home_data-item -->
                <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                    <div>
                        <i class="fa fa-phone"></i>
                        <h1>رقم الهاتف</h1>
                        <input type="text" id="edit-area" placeholder="رقم الهاتف">
                        <span>{{auth()->user()->phone}}</span>
                    </div>
                </div>
                <!-- /.home_data-item -->

                <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                    <div>
                        <i class="fa fa-envelope"></i>
                        <h1>البريد الإلكتروني</h1>
                        <input type="email" id="edit-area" placeholder="البريد الإلكتروني">
                        <span>{{auth()->user()->email}}</span>
                    </div>
                </div>
                <!-- /.home_data-item -->
                <div class="home_data-item col-md-6 col-sm-6  col-xs-12 pull-right">
                    <div>
                        <i class="fa fa-globe"></i>
                        <h1>الدولة</h1>
                        <input type="text" id="edit-area" placeholder="الدولة">
                        <span>{{auth()->user()->country->name}}</span>
                    </div>
                </div>
                <!-- /.home_data-item -->
                <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                    <div>
                        <i class="fa fa-male"></i>
                        <h1>الجنس</h1>

                        <span>{{auth()->user()->gender_string}}</span>
                    </div>
                </div>
                <!-- /.home_data-item -->
                <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                    <div>
                        <i class="fa fa-globe"></i>
                        <h1>مدرب / متدرب</h1>
                        <input type="text" id="edit-area" placeholder="مدرب / متدرب">
                        <span>{{auth()->user()->teacher_string}}</span>
                    </div>
                </div>
                <!-- /.home_data-item -->

                <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                    <div>
                        <i class="fa fa-graduation-cap"></i>
                        <h1> المؤهل</h1>
                        <input type="text" id="edit-area" placeholder="المؤهل">
                        <span>{{auth()->user()->degree}}</span>
                    </div>
                </div>
                <!-- /.home_data-item -->

                <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                    <div>
                        <i class="fa fa-briefcase"></i>
                        <h1>التخصص</h1>
                        <input type="text" id="edit-area" placeholder="التخصص">
                        <span>{{auth()->user()->specialization}}</span>
                    </div>
                </div>
                <!-- /.home_data-item -->

                <div class="home_data-item all-set col-md-6 col-sm-6  col-xs-12 pull-right">
                    <div>
                        <i class="fa fa-cogs"></i>
                        <h1>مجال العمل</h1>
                        <span>{{auth()->user()->employment}}</span>
                    </div>
                </div>
                <!-- /.home_data-item -->

                <div class="home_data-item all-set col-md-12 col-sm-12  col-xs-12 pull-right">
                    <input type="submit" class="confirm-set" value="حفظ التعديلات">
                </div>
                <!-- /.home_data-item -->
            </form>
        </div>
        <!-- ./home_data -->
    </div>
    <!-- /.home-content -->
</div>
