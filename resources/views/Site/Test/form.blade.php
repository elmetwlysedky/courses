<div class="lecture-item">
    <h1>اضف السؤال</h1>
    {!!Form::textarea('ask',null,['class'=>'form-control','rows'=> 2])!!}
</div>
<!-- end lecture-item -->
<input type="hidden" name="course_id" value="{{$course_id->id}}">
<div class="lecture-item">
    <h1>يجب عليك اختيار اجابة صحيحة واحده</h1>
    <ul>
        <li>



            {!!Form::text('answer_1',null,['class'=>'form-control','placeholder'=>'اكتب الاجابة الاولى'])!!}

        </li>
        <li>

            {!!Form::text('answer_2',null,['class'=>'form-control','placeholder'=>'اكتب الاجابة الثانيه'])!!}
        </li>
        <li>

            {!!Form::text('answer_3',null,['class'=>'form-control','placeholder'=>'اكتب الاجابة الثالثة'])!!}
        </li>
        <li>

            {!!Form::text('answer_4',null,['class'=>'form-control','placeholder'=>'اكتب الاجابة الاخيرة'])!!}
        </li>
        <li>
            {!! Form::select('num_answer'
         , [ '1'=>'الاجابة الاولى','2'=>'الاجابة الثانيه','3'=>'الاجابة الثاالثه','4'=>'الاجابة الاخيرة',],null
         , ['class'=>'form-control','placeholder' => 'الاجابة الصحيحة'])!!}
        </li>
    </ul>
</div>
<!-- end lecture-item -->








