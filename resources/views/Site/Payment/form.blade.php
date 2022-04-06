@extends('Site.Layouts.master')

@section('content')
    <div class="intro-box">
        <div class="container">
            @if(isset($fail))
                <div class="alert alert-danger text-center">
                    فشلت عملية الدفع
                </div>
            @endif

    <script src="https://eu-test.oppwa.com/v1/paymentWidgets.js?checkoutId={{$responseData['id']}}"></script>

    <form action="{{route('site.course.show',$id)}}" class="paymentWidgets" data-brands="VISA MASTER AMEX"></form>

        </div>
    </div>
@stop

