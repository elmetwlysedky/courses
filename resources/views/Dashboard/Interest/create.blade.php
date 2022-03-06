@extends('Dashboard.Layouts.master')

@section('title')
   اضافة اهتمام
@endsection

@section('content')
<!-- Form validation -->
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">اضافة اهتمام</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
                <a class="list-icons-item" data-action="remove"></a>
            </div>
        </div>
    </div>

    <div class="card-body">

        {!! Form::open(['route' => 'interest.store','method'=>'post', 'class'=>'form-validate-jquery']) !!}



        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


          @include('Dashboard.Interest.form')

            <div class="d-flex justify-content-end align-items-center">
                            <button type="submit" class="btn bg-teal ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
            </div>
        {!! Form::close() !!}
    </div>
</div>
<!-- /form validation -->
@endsection
