<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>لوحة التحكم @yield('title')</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset('Dashboard/global_assets/css/icons/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Dashboard/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Dashboard/assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Dashboard/assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Dashboard/assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Dashboard/assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="{{asset('Dashboard/global_assets/js/main/jquery.min.js')}}"></script>
    <script src="{{asset('Dashboard/global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('Dashboard/global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
    <script src="{{asset('Dashboard/global_assets/js/plugins/ui/ripple.min.js')}}"></script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('c051ed6d6186e1401622', {
            cluster: 'eu'
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
            alert(JSON.stringify(data));
        });
    </script>

    <script src="{{asset('js/notify.js')}}"></script>



    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="{{asset('Dashboard/global_assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
    <script src="{{asset('Dashboard/global_assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
    <script src="{{asset('Dashboard/global_assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
    <script src="{{asset('Dashboard/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
    <script src="{{asset('Dashboard/global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script src="{{asset('Dashboard/global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>

    <script src="{{asset('Dashboard/assets/js/app.js')}}"></script>
    <script src="{{asset('Dashboard/global_assets/js/demo_pages/dashboard.js')}}"></script>
    <script src="{{asset('Dashboard/global_assets/js/demo_pages/form_select2.js')}}"></script>
    <script src="{{asset('Dashboard/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js')}}"></script>
    <script src="{{asset('Dashboard/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>

    @yield('js')

    <!-- /theme JS files -->

</head>

<body>
