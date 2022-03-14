<fieldset class="mb-3">
    <legend class="text-uppercase font-size-sm font-weight-bold"></legend>

    <div class="form-group row">
        <label class="col-form-label col-lg-3">المدرب <span class="text-danger">*</span></label>
        <div class="col-lg-9">

            {!! Form::select('teacher_id',$teachers, null, ['class'=>'form-control','placeholder' => 'اختار']) !!}

        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-3">اسم الكورس <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::text('title',null,['class'=>'form-control'])!!}
        </div>
    </div>


    <div class="form-group row">
        <label class="col-form-label col-lg-3">اهتمامات الكورس <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!! Form::select('interest_id[]',$interests, null,
            ['class'=>'js-example-basic-multiple form-control', 'multiple'=>'multiple']) !!}

        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-3">متطلبات الكورس <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::text('requirements',null,['class'=>'form-control'])!!}
        </div>
    </div>


    <div class="form-group row">
        <label class="col-form-label col-lg-3">معلومات عن الكورس <span class="text-danger">*</span></label>
        <div class="col-lg-9 " >
            {!!Form::textarea('description',null,['class'=>'form-control','rows'=> 2])!!}
        </div>
    </div>


    <div class="form-group row">
        <label class="col-form-label col-lg-3"> حالة الكورس<span class="text-danger">*</span></label>
        <div class="col-lg-9">

            {!! Form::select('free'
           , ['0'=>'مجاني', '1'=>'بمقابل'],null
           , ['class'=>'form-control','placeholder' => 'اختار'])!!}

        </div>
    </div>


    <div class="form-group row">
        <label class="col-form-label col-lg-3"> سعر الكورس<span class="text-danger">*</span></label>
        <div class="col-lg-9">

            {!!Form::number('price', '00.00',['class'=>'form-control','placeholder' => 'اختار'])!!}

        </div>
    </div>



    <div class="form-group row">
        <label class="col-form-label col-lg-3"> مشاهدين  الكورس<span class="text-danger">*</span></label>
        <div class="col-lg-9">

            {!! Form::select('gender'
           , ['male'=>'رجال', 'female'=>'بنات', 'all' =>'الكل'],null
           , ['class'=>'form-control'])!!}

        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-3">صورة <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::file('image',null,['class'=>'form-control'])!!}
        </div>
    </div>


    <div class="form-group row">
        <label class="col-form-label col-lg-3">فيديو مقدمه الكورس <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::file('video_intro',null,['class'=>'form-control'])!!}
        </div>
    </div>


    <div class="form-group row">
        <label class="col-form-label col-lg-3"> تفعيل الكورس<span class="text-danger">*</span></label>
        <div class="col-lg-9">

            {!! Form::select('active'
           , ['0'=>'لا', '1'=>'نعم'],null
           , ['class'=>'form-control' ,'placeholder' => 'اختار'])!!}

        </div>
    </div>
</fieldset>

