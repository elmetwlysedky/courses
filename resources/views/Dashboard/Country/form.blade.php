<fieldset class="mb-3">
    <legend class="text-uppercase font-size-sm font-weight-bold"></legend>

    <!-- Basic text input -->
    <div class="form-group row">
        <label class="col-form-label col-lg-3">اسم الدوله<span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::text('name', null,['class'=>'form-control','placeholder'=>'ادخل اسم الدوله'])!!}
        </div>
    </div>
    <!-- /basic text input -->
</fieldset>
