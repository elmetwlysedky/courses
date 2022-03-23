@extends('Site.Layouts.master')

@section('title')   @endsection


@section('content')


    <div class="up-container">
        <div class="up-header text-center">
            <div class="container">
                <h1>إضافة اختبار جديد</h1>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.up-header -->
        <div class="up-box">
            <div class="container">
                <div class="up-form">
                    <div class="add_lecture in-one">

                    {!!Form::open(['route' => 'test.store', 'class'=>'add-form','method'=>'post', 'enctype'=>'multipart/form-data'])!!}


                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @include('Site.test.form')
                        <div class="lecture-item confirm-lec">
                            <input type="submit" value="نشر الاختبار">
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

