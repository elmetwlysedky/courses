{{--<x-guest-layout>--}}
{{--    <x-auth-card>--}}
{{--        <x-slot name="logo">--}}
{{--            <a href="/">--}}
{{--                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
{{--            </a>--}}
{{--        </x-slot>--}}

{{--        <!-- Validation Errors -->--}}
{{--        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

{{--        <form method="POST" action="{{ route('register') }}">--}}
{{--            @csrf--}}

{{--            <!-- Name -->--}}
{{--            <div>--}}
{{--                <x-label for="name" :value="__('Name')" />--}}

{{--                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />--}}
{{--            </div>--}}

{{--            <!-- Email Address -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="email" :value="__('Email')" />--}}

{{--                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />--}}
{{--            </div>--}}

{{--            <!-- Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password" :value="__('Password')" />--}}

{{--                <x-input id="password" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password"--}}
{{--                                required autocomplete="new-password" />--}}
{{--            </div>--}}

{{--            <!-- Confirm Password -->--}}
{{--            <div class="mt-4">--}}
{{--                <x-label for="password_confirmation" :value="__('Confirm Password')" />--}}

{{--                <x-input id="password_confirmation" class="block mt-1 w-full"--}}
{{--                                type="password"--}}
{{--                                name="password_confirmation" required />--}}
{{--            </div>--}}

{{--            <div class="flex items-center justify-end mt-4">--}}
{{--                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">--}}
{{--                    {{ __('Already registered?') }}--}}
{{--                </a>--}}

{{--                <x-button class="ml-4">--}}
{{--                    {{ __('Register') }}--}}
{{--                </x-button>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </x-auth-card>--}}
{{--</x-guest-layout>--}}




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

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="up_form-item">
                        <span id="error-form">من فضلك ادخل البيانات الصحيحة</span>
                        <input name="name" type="text" placeholder="الإسم بالكامل">
                    </div>
                    <!-- /.up_form-item -->
{{--                    <div class="up_form-item">--}}
{{--                        <input type="text" placeholder="إسم المستخدم">--}}
{{--                    </div>--}}
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
                        <select name="country">
                            <option>الدولة ...</option>
                            <option>ام الدنيا</option>
                            <option>ام الدنيا</option>
                            <option>ام الدنيا</option>
                            <option>ام الدنيا</option>
                            <option>ام الدنيا</option>
                            <option>ام الدنيا</option>
                            <option>ام الدنيا</option>
                            <option>ام الدنيا</option>
                            <option>ام الدنيا</option>
                            <option>ام الدنيا</option>
                            <option>ام الدنيا</option>
                            <option>ام الدنيا</option>
                            <option>ام الدنيا</option>
                            <option>ام الدنيا</option>
                            <option>ام الدنيا</option>
                            <option>ام الدنيا</option>
                            <option>ام الدنيا</option>
                            <option>ام الدنيا</option>
                            <option>ام الدنيا</option>
                            <option>ام الدنيا</option>
                            <option>ام الدنيا</option>
                            <option>ام الدنيا</option>
                            <option>ام الدنيا</option>

                        </select>
                    </div>
                    <!-- /.up_form-item -->
                    <div class="up_form-item">
                        <select name="gender">
                            <option selected disabled >الجنس ...</option>
                            <option value="male" >مذكر</option>
                            <option value="female">مؤنث</option>
                        </select>
                    </div>
                    <!-- /.up_form-item -->
                    <div class="up_form-item text-right">
                        <label>
                            <input name="role" value="teacher" type="checkbox">
                            <span>مدرب</span>
                            <a href="trainer-privacy.html" class="show-privacy">تعرف علي سياسة الخصوصية كمدرب</a>
                        </label>
                        <label>
                            <input name="role" value="student" type="checkbox">
                            <span>متدرب</span>
                            <a href="trainer-privacy.html" class="show-privacy">تعرف علي سياسة الخصوصية كمتدرب</a>
                        </label>
                        <label>
                            <input name="role" value="two" type="checkbox">
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
