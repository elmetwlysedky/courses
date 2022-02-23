@extends('Dashboard.Layouts.master')

@section('title')
    Interest edit
@endsection

@section('content')
    <!-- Form validation -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Create Interest</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
{{--           {!!  Form::open(['route' => ['interest.update', $interest->id] ,'method'=>'put' ,'class'=>'form-validate-jquery']) !!}--}}
            {!!Form::model($interest, ['route' => ['interest.update', $interest->id],'class'=>'form-validate-jquery' ,'method'=>'PATCH'])!!}


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
                    <button type="submit" class="btn bg-teal ml-3">update</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
    <!-- /form validation -->
@endsection

