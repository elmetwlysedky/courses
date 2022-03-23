<fieldset class="mb-3">
    <legend class="text-uppercase font-size-sm font-weight-bold"></legend>


    {{-- <x-auth-validation-errors  class="alert alert-warning alert-styled-left alert-dismissible" :errors="$errors"/> --}}

    <!-- Basic text input -->
    <div class="form-group row">
        <label class="col-form-label col-lg-3">الاسم بالكامل <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::text('name',null,['class'=>'form-control'])!!}
        </div>
    </div>
    <!-- /basic text input -->




    <!-- Email field -->
    <div class="form-group row">
        <label class="col-form-label col-lg-3">البريد الالكتروني <span class="text-danger">*</span></label>
        <div class="col-lg-9">
            {!!Form::email('email',null,['class'=>'form-control'])!!}
            {{-- <input type="email" name="email" class="form-control"  required placeholder="Enter a valid email address"> --}}
        </div>
    </div>
    <!-- /email field -->




    <!-- Input group -->
    <div class="form-group row">
        <label class="col-form-label col-lg-3">رقم الهاتف <span class="text-danger">*</span></label>
        <div class="col-lg-9">

                {!!Form::text('phone',null,['class'=>'form-control'])!!}
                {{-- <input type="text" name="phone" class="form-control" required placeholder="Input phone numper"> --}}

        </div>
    </div>
    <!-- /input group -->


    <!-- Password field -->
    <div class="form-group row">
        <label class="col-form-label col-lg-3">كلمه السر  <span class="text-danger">*</span></label>
        <div class="col-lg-9">

            {!!Form::password('password',['class'=>'form-control'])!!}

        </div>
    </div>
    <!-- /password field -->


    <!-- Repeat password -->
    <div class="form-group row">
        <label class="col-form-label col-lg-3">تاكيد كلمه السر <span class="text-danger">*</span></label>
        <div class="col-lg-9">


            {!!Form::password('password_confirmation',['class'=>'form-control'])!!}

        </div>
    </div>


    <div class="form-group row">
        <label class="col-form-label col-lg-3"> الصلاحيه<span class="text-danger">*</span></label>
        <div class="col-lg-9">

            {!! Form::select('is_teacher'
           , ['1'=>'مدرب', '0'=>'طالب'],null
           , ['class'=>'form-control'])!!}

        </div>
    </div>

    <div class="form-group row">
            <label class="col-form-label col-lg-3">النوع <span class="text-danger">*</span></label>
        <div class="col-lg-9">

            {!! Form::select('gender'
           , ['1'=>'ذكر', '0'=>'انثى'],null
           , ['class'=>'form-control'])!!}

        </div>
    </div>

    <div class="form-group row">
        <label class="col-form-label col-lg-3">الدوله <span class="text-danger">*</span></label>
        <div class="col-lg-9">

            {!! Form::select('country_id',$country , null, ['class'=>'form-control']) !!}

        </div>
    </div>


    <div class="form-group row">
        <label class="col-form-label col-lg-3">الصورة الشخصيه <span class="text-danger">*</span></label>
        <div class="col-lg-9">

    <div class="up_form-item">
        {!!Form::file('avatar',null,['class'=>'form-control'])!!}
    </div>
        </div>
    </div>

    <!-- /repeat password -->
</fieldset>
