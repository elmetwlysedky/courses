@extends('Site.Layouts.master')

@section('title') @stop

@section('content')

@foreach($setting as $set)
    @if($set->name == 'معلومات عن الموقع')
    <div class="up-container">
        <div class="up-header text-center">
            <div class="container">

                <h1>{{$set->name}}</h1>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.up-header -->
        <div class="up-box about-box">
            <div class="container">
                <div class="about-img col-md-4 col-xs-12 pull-left">
                    <img src="/App/images/3lom.jpg" class="img-responsive" alt="">
                </div>
                <!-- end about-img -->
                <div class="about-data col-md-8 col-xs-12 pull-right text-right">
                    <p>{{$set->value}}</p>
                </div>

                <!-- end about-data -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.up-box -->
    </div>
    @endif
@endforeach
@stop
