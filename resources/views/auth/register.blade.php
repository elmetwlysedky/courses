
@extends('Site.Layouts.master')

@section('title')
    register
@endsection

@section('content')


<div class="up-container">
    <div class="up-header text-center">
        <div class="container">
            <h1>يرجي تسجيل حساب جديد</h1>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.up-header -->
    <div class="up-box">
        <div class="container">
            <div class="up-form">

                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="up_form-item">
                        <span id="error-form">من فضلك ادخل البيانات الصحيحة</span>
                        <input name="name" type="text" placeholder="الإسم بالكامل">
                    </div>

                    <!-- /.up_form-item -->
                    <div class="up_form-item">
                        <input name="email" type="email" placeholder="البريد الإلكتروني">
                    </div>
                    <!-- /.up_form-item -->
                    <div class="up_form-item">
                        <input name="password" type="password" placeholder="كلمة المرور">
                    </div>
                    <!-- /.up_form-item -->
                    <div class="up_form-item">
                        <input name="password_confirmation" type="password" placeholder="إعادة كلمة المرور">
                    </div>
                    <!-- /.up_form-item -->
                    <div class="up_form-item">
                        <input name="phone" type="text" placeholder="رقم الهاتف">
                    </div>
                    <!-- /.up_form-item -->
                    <div class="up_form-item">
                        <select name="country_id">
                            <option  selected disabled>الدولة ...</option>
                            @foreach($country as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                            @endforeach

                        </select>
                    </div>
                    <!-- /.up_form-item -->
                    <div class="up_form-item">
                        <select name="gender_string">
                            <option selected disabled >الجنس ...</option>
                            <option value="1" >مذكر</option>
                            <option value="0">مؤنث</option>
                        </select>
                    </div>

                    <div class="up_form-item">
                        <input name="avatar" type="file" placeholder="الصورة الشخصيه ">
                    </div>

                    <!-- /.up_form-item -->
                    <div class="up_form-item text-right">
                        <label>
                            <input name="is_teacher" value="1" type="checkbox">
                            <span>مدرب</span>
                            <a href="trainer-privacy.html" class="show-privacy">تعرف علي سياسة الخصوصية كمدرب</a>
                        </label>
                        <label>
                            <input name="is_teacher" value="0" type="checkbox">
                            <span>متدرب</span>
                            <a href="trainer-privacy.html" class="show-privacy">تعرف علي سياسة الخصوصية كمتدرب</a>
                        </label>
                        <label>
                            <input name="is_teacher" value="1" type="checkbox">
                            <span>كلاهما</span>
                        </label>
                    </div>
                    <!-- /.up_form-item -->



                    <div class="policy text-right">
                        <label class="text-right policy">
                            <input type="checkbox">
                            <span>هل انت موافق علي سياسة الخصوصية</span>
                        </label>
                    </div>
                    <!-- /.policy -->

                    <div class="up_form-item up-confirm">
                        <input type="submit" value="تسجيل">
                    </div>
                    <!-- /.up_form-item -->
                </form>

            </div>
            <!-- /.up-form -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.up-box -->
</div>
<!-- /.up-container -->

@endsection
