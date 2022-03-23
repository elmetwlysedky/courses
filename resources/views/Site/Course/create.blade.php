@extends('Site.Layouts.master')

@section('title')   @endsection


@section('content')


    <div class="up-container">
        <div class="up-header text-center">
            <div class="container">
                <h1>إضافة دورة جديدة</h1>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.up-header -->
        <div class="up-box">
            <div class="container">
                <div class="up-form">

                    {!!Form::open(['route' => 'site.course.store', 'class'=>'add-form','method'=>'post', 'enctype'=>'multipart/form-data'])!!}


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
                            <input type="submit" value="اضافة الدورة">
                        </div>
                        <!-- /.up_form-item -->
                    {!! Form::close() !!}

                </div>
                <!-- /.up-form -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.up-box -->
    </div>
    <!-- /.up-container -->

@endsection


