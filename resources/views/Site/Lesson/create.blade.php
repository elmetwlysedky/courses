@extends('Site.Layouts.master')

@section('title')   @stop


@section('content')


    <div class="up-container">
        <div class="up-header text-center">
            <div class="container">
                <h1>إضافة محاضرة جديدة</h1>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.up-header -->
        <div class="up-box">
            <div class="container">
                <div class="up-form">

                    <div class="add_lecture in-one">

                        {!!Form::open(['route' => 'site.lesson.store', 'class'=>'add-form','method'=>'post', 'enctype'=>'multipart/form-data'])!!}

                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif



                        @include('Site.Lesson.form')
                            <!-- /.lecture-item -->
                            <div class="lecture-item confirm-lec">
                                <input type="submit" value="إضافة محاضرة">
                            </div>
                            <!-- /.lecture-item -->

                        {!! Form::close() !!}

                    </div>
                    <!-- /.add_lecture -->
                </div>
                <!-- /.up-form -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.up-box -->
    </div>
    <!-- /.up-container -->

@endsection
