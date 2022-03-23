

<div class="container"  style="width: 500px">

    <div class="lost-inner">

        <div class="lost-item" >

            {!!Form::text('name',null,['class'=>'form-control'])!!}

        </div>
        <!-- /.lost-item -->
        <div class="lost-item" >
            {!!Form::email('email',null,['class'=>'form-control'])!!}
        </div>


        <div class="lost-item" >
            {!!Form::text('phone',null,['class'=>'form-control'])!!}
        </div>

        <div class="lost-item" >
            {!! Form::select('is_teacher'
         , ['1'=>'مدرب', '0'=>'طالب'],null
         , ['class'=>'form-control'])!!}

        </div>

        <div class="lost-item" >
            {!! Form::select('gender'
         , ['1'=>'ذكر', '0'=>'انثى'],null
         , ['class'=>'form-control'])!!}
        </div>


        <div class="lost-item" >
            {!!Form::text('degree',null,['class'=>'form-control'])!!}
        </div>


        <div class="lost-item" >
            {!!Form::text('employment',null,['class'=>'form-control'])!!}
        </div>


        <div class="lost-item" >
            {!!Form::text('specialization',null,['class'=>'form-control'])!!}
        </div>

        <div class="lost-item" >
            {!! Form::select('country_id',$country , null, ['class'=>'form-control']) !!}
        </div>


        <div class="lost-item" >
            {!!Form::file('avatar',null,['class'=>'form-control'])!!}
        </div>


        <div class="text-center">
            <input type="submit" value="حفظ ">
        </div>

        <!-- /.lost-item -->
    </div>
    <!-- /.lost-inner -->

</div>


