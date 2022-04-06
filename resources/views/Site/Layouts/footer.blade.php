
<footer>
    <div class="container">
        <div class="footer-sub col-md-2 col-xs-12 text-center pull-right">
            <ul>
                <li>
                    <a href="{{route('contact.create')}}">من نحن</a>
                </li>

                <li>
                    <a href="{{route('contact.create')}}">إتصل بنا</a>
                </li>
            </ul>
        </div>
        <!-- end footer-sub -->
        <div class="copyrights col-md-8 col-xs-12 text-center pull-right">
            <p>حميع الحقوق محفوظة لدي العلوم العصرية للتدريب</p>
        </div>
        <!-- /.copyrights -->
        <div class="footer-links col-md-2 col-xs-12 pull-left text-center">
            <ul>
                @foreach($setting as $set)
                    @if($set->name == 'facebook')
                <li>
                    <a href="https://{{$set->value}}" data-toggle="tooltip" data-placement="top" title="facebook">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                </li>
                    @endif
                    @if($set->name == 'twitter')
                <li>
                    <a href="https://{{$set->value}}" data-toggle="tooltip" data-placement="top" title="twitter">
                        <i class="fa fa-twitter-square"></i>
                    </a>
                </li>
                    @endif
                    @if($set->name == 'linkedIn')
                <li>
                    <a href="https://{{$set->value}}" data-toggle="tooltip" data-placement="top" title="linkedin">
                        <i class="fa fa-linkedin-square"></i>
                    </a>
                </li>
                    @endif
                @endforeach
            </ul>
        </div>
        <!-- /.footer-links -->
    </div>
    <!-- /.container -->

</footer>

<!-- /.toTop -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('070accdaed6901a4ab47', {
        cluster: 'eu'
    });

    var channel = pusher.subscribe('add-course');
    channel.bind('App\\Events\\AddCourse', function(data) {
        alert(JSON.stringify(data));
    });
</script>


<!-- Javascript Files -->

<script src="/App/js/jquery-2.2.2.min.js" type="text/javascript"></script>
<script src="/App/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/App/js/html5shiv.min.js" type="text/javascript"></script>
<script src="/App/js/jquery-smoothscroll.js" type="text/javascript"></script>
<script src="/App/js/modernizr.min.js" type="text/javascript"></script>
<script src="/App/js/owl.carousel.min.js" type="text/javascript"></script>
<script src="/App/js/wow.min.js" type="text/javascript"></script>
<script src="/App/js/placeholdem.min.js" type="text/javascript"></script>
<script src="/App/js/toucheffects.js"></script>
<script src="/App/js/jquery.selectric.min.js" type="text/javascript"></script>
<script src="/App/js/classie.js" type="text/javascript"></script>
<script src="/App/js/jquery.nicescroll.min.js" type="text/javascript"></script>
<script src="/App/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
<script src="/App/js/script.js" type="text/javascript"></script>
<script src="{{asset('js/notify.js')}}"></script>

@yield('footer')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>


</body>

</html>
