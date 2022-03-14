
<input type="hidden" name="teacher_id" value="{{auth()->user()->id}}">
<input type="hidden" name="active" value="0">

<div class="up_form-item">
    <h1>عنوان الدورة</h1>
    {!!Form::text('title',null,['class'=>'form-control'])!!}
</div>
<!-- /.up_form-item -->
<div class="up_form-item">
    <h1>متطلب سابق</h1>
    {!!Form::text('requirements',null,['class'=>'form-control'])!!}
</div>
<!-- /.up_form-item -->
<div class="up_form-item">
    <h1>المجال</h1>
    {!! Form::select('interest_id[]',$interests, null,
           ['class'=>'js-example-basic-multiple form-control', 'multiple'=>'multiple']) !!}
</div>

<div class="up_form-item">
    <h1>رفع صورة للكورس</h1>
    {!!Form::file('image',null,['class'=>'form-control'])!!}
</div>
<!-- /.up_form-item -->
<div class="up_form-item">
    <h1> فيديو مقدمة الكورس</h1>
    <div class="add_cont text-right">
        <div class="lecture-item">
            <div class="add_cont text-right">
                <label class="text-right">
                    <input type="checkbox" id="up-video">
                    <span>اذا أردت رفع فيديو من جهازك الشخصي</span>
                </label>

                <div class="videoUploaded col-xs-12 text-right">
                    <span><i class="fa fa-video-camera"></i> ارفع فيديو من جهازك</span>

                    {!!Form::file('video_intro',null,['class'=>'uploaded'])!!}

                </div>
            </div>
        </div>
    </div>



        <!-- /.lecture-item -->



<!-- /.up_form-item -->
<div class="up_form-item">
    <h1>وصف الدورة</h1>
    {!!Form::textarea('description',null,['class'=>'form-control','rows'=> 2])!!}
</div>
<!-- /.up_form-item -->
<div class="up_form-item">
    <h1>الجنس المتوقع</h1>
    <div class="add_cont text-right">
        {!! Form::select('gender'
           , ['male'=>'رجال', 'female'=>'بنات', 'all' =>'الكل'],null
           , ['class'=>'form-control'])!!}

    </div>
</div>

<div class="up_form-item">
    <h1>نوع الدورة</h1>
    <div class="add_cont text-right">
        {!! Form::select('free'
         , ['0'=>'مجاني', '1'=>'بمقابل'],null
         , ['class'=>'form-control','placeholder' => 'اختار'])!!}

        {!!Form::number('price', '00.00',['class'=>'form-control'])!!}
    </div>
</div>
<!-- /.up_form-item -->

<div class="up_form-item">
    <a class="add-cert">اضافة شهادة للدورة</a>
    <div class="course-cert">
        <div class="up_form-item">
            <h1>إسم الشهادة</h1>
            <input type="text" placeholder="اضف اسم الشهادة">
        </div>
        <!-- /.up_form-item -->
        <div class="up_form-item">
            <h1>الجهة المانحة</h1>
            <input type="text" placeholder="اضف الجهة المانحة">
        </div>
        <!-- /.up_form-item -->
        <div class="up_form-item">
            <h1>تكلفة الشهادة</h1>
            <div class="add_cont text-right">
                <label class="text-right">
                    <input type="radio" name="f">
                    <span>مجاني</span>
                </label>
                <label class="text-right">
                    <input type="radio" name="f">
                    <span>مدفوع</span>
                </label>
                <input type="number" data-toggle="tooltip" data-placement="top" title="اضف سعر الشهادة"> </div>
        </div>
        <!-- /.up_form-item -->
    </div>
    <!-- /.course-cert -->
</div>
<!-- /.up_form-item -->
