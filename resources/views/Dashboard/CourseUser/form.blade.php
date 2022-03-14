

<fieldset class="mb-3">
    <legend class="text-uppercase font-size-sm font-weight-bold"></legend>



    <div class="form-group row">
        <label class="col-form-label col-lg-3">الكورسات <span class="text-danger">*</span></label>
        <div class="col-lg-9">

            {!! Form::select('course_id[]',$courses, null,
            ['class'=>'js-example-basic-multiple form-control', 'multiple'=>'multiple']) !!}

        </div>
    </div>



    <div class="form-group row">
        <label class="col-form-label col-lg-3">المستخدمين <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!! Form::select('user_id',$users, null,
            ['class'=>' form-control' ,'placeholder'=>'.....']) !!}

        </div>
    </div>

</fieldset>
