@extends('Dashboard.Layouts.master')

@section('title')
    اضافة كورس
@endsection

@section('js')

@endsection

@section('content')


   <div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">اضافة كورس</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
                <a class="list-icons-item" data-action="remove"></a>
            </div>
        </div>
    </div>

    <div class="card-body">
        <p class="mb-4"> <strong></strong> </p>

        {!!Form::open(['route' => 'course.store', 'class'=>'form-validate-jquery','method'=>'post', 'enctype'=>'multipart/form-data'])!!}


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @include('Dashboard.Courses.form')
        <button type="submit" class="btn bg-teal-400 btn-labeled btn-labeled-right"><b><i class="icon-plus3"></i></b> اضافة </button>
        {!! Form::close() !!}
    </div>
    </div>

@stop
