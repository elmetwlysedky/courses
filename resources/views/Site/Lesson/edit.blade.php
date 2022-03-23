@extends('Site.Layouts.master')

@section('title')    @stop


@section('content')

    <div class="up-container">
        <div class="up-header text-center">
            <div class="container">
                <h1>تعديل المحاضرة</h1>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.up-header -->
        <div class="up-box">
            <div class="container">
                <div class="up-form">

                    <div class="add_lecture in-one">
                        {!!Form::model($lesson, ['route' => ['Site.lesson.update', $lesson->id],'class'=>'add-form' ,'method'=>'PATCH','enctype'=>'multipart/form-data'])!!}


                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @include('Site.Course.form')
                        <div class="up_form-item up-confirm">
                            <input type="submit" value="حفظ الدرس">
                        </div>
                        <!-- /.up_form-item -->
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
