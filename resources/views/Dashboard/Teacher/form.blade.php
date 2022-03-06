<fieldset class="mb-3">
    <legend class="text-uppercase font-size-sm font-weight-bold"></legend>

    <div class="form-group row">
        <label class="col-form-label col-lg-3">المستخدمين <span class="text-danger">*</span></label>
        <div class="col-lg-9">

            {!! Form::select('user_id',$user , null, ['class'=>'form-control']) !!}

        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-3">الوظيفة <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::text('employment',null,['class'=>'form-control'])!!}
        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-3">الدرجة العلميه <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::text('degree',null,['class'=>'form-control'])!!}
        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-3">التخصص <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::text('specialization',null,['class'=>'form-control'])!!}
        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-3">السيره الذاتيه <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::file('cv',null,['class'=>'form-control'])!!}
        </div>
    </div>


</fieldset>

