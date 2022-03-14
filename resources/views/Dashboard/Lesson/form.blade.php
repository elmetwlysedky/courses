<fieldset class="mb-3">
    <legend class="text-uppercase font-size-sm font-weight-bold"></legend>

    <div class="form-group row">
        <label class="col-form-label col-lg-3">الكورس <span class="text-danger">*</span></label>
        <div class="col-lg-9">

            {!! Form::select('course_id',$course ,null, ['class'=>'form-control','placeholder' => 'اختار']) !!}

        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-3">اسم الدرس <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::text('name',null,['class'=>'form-control'])!!}
        </div>
    </div>



    <div class="form-group row">
        <label class="col-form-label col-lg-3">معلومات عن الدرس <span class="text-danger">*</span></label>
        <div class="col-lg-9 " >
            {!!Form::textarea('description',null,['class'=>'form-control','rows'=> 2])!!}
        </div>
    </div>




    <div class="form-group row">
        <label class="col-form-label col-lg-3"> ترتيب الدرس<span class="text-danger">*</span></label>
        <div class="col-lg-9">

            {!!Form::number('sequence',null,['class'=>'form-control','placeholder' => 'اختار'])!!}

        </div>
    </div>



    <div class="form-group row">
        <label class="col-form-label col-lg-3">صورة <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::file('image',null,['class'=>'form-control'])!!}
        </div>
    </div>


    <div class="form-group row">
        <label class="col-form-label col-lg-3">فيديو <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::file('video',null,['class'=>'form-control'])!!}
        </div>
    </div>


</fieldset>

