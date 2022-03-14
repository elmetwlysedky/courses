

<!DOCTYPE html>
<!--[if IE 8]><html class="ie8 ie-all" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 9]><html class="ie9 ie-all" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if IE 10]><html class="ie10 ie-all" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]-->
<!--[if !IE]><!-->
<!--<![endif]-->
<html>

<head>
    <title> العلوم العصرية للتدريب </title>
    <meta name="author" content="Amir Nageh">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <!-- Css Files -->
    <link href="/App/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/App/css/animate.css" rel="stylesheet" type="text/css">
    <link href="/App/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="/App/css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="/App/css/owl.theme.css" rel="stylesheet" type="text/css">
    <link href="/App/css/bootstrap.vertical-tabs.css" rel="stylesheet" type="text/css">
    <link href="/App/css/selectric.css" rel="stylesheet" type="text/css">
    <link href="/App/css/style.css" rel="stylesheet" type="text/css">
    <link href="/App/css/reset.css" rel="stylesheet" type="text/css">
    <link href="/App/images/favicon.png" rel="icon" type="text/css">

   </head>

<body>

<!-- start the loading screen -->
<div class="wrap">
    <div class="loading">
        <div class="bounceball"></div>
        <div class="text">NOW LOADING</div>
    </div>
</div>

<!-- end the loading screen -->

<div class="st-content">
    <div class="dividers">
        <span class="t1"></span>
        <span class="t2"></span>
        <span class="t3"></span>
        <span class="t4"></span>
        <span class="t5"></span>
        <span class="t1"></span>
        <span class="t2"></span>
        <span class="t3"></span>
        <span class="t4"></span>
        <span class="t5"></span>
    </div>
    <!-- /.dividers -->

    <div id="st-trigger-effects" class="column">

        <button data-effect="st-effect-8" class="st_show">
            <i class="fa fa-bars"></i>
        </button>
    </div>

<header>
    <div class="error-detect">
        <div class="container">
            <div class="error text-center">
                <h1 class="danger-l">اي كلام اي كلام اي كلام يا حسني اي كلام يا حسني اي كلام</h1>
                <h1 class="message-l">اي كلام اي كلام اي كلام يا حسني اي كلام يا حسني اي كلام</h1>
                <h1 class="success-l">اي كلام اي كلام اي كلام يا حسني اي كلام يا حسني اي كلام</h1>
            </div>
            <!-- /.error-danger -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.error-detect -->

    <div class="login-area">
        <div class="container">
            <div class="login-form col-md-6 col-xs-12 text-right pull-right">
                <form action="{{route('login')}}" method="post">
                    @csrf
                <h1>تسجيل الدخول</h1>
                <div class="login-item">
                    <input name="email" type="text" placeholder="البريد الالكتروني">
                </div>
                <!-- /.login-item -->
                <div class="login-item">
                    <input name="password" type="password" placeholder="كلمة السر">
                </div>
                <!-- /.login-item -->
                <div class="login-item">
                    <label class="pull-right">
                        <input type="checkbox">
                        <span>تذكر كلمة السر دائماً</span>
                    </label>
                    <label class="pull-left">
                        <a href="#" class="forget">هل نسيت كلمة المرور ؟</a>
                    </label>
                </div>
                <!-- /.login-item -->
                <div class="login-item">
                    <input type="submit" value="دخول">
                </div>

                </form>
                <!-- /.login-item -->
            </div>
            <!-- /.login-form -->

            <div class="signup-form col-md-6 col-xs-12 text-right">
                <h1>تسجيل عضوية جديدة</h1>
                <p>اذا كنت مستخدم جديد لموقعنا فيمكنك ان تتصفح معظم الكورسات الموجودة الان امامك ولكن لن تستطيع الحصول علي معلومات الكورس او الاشتراك به الا اذا كنت تمتلك حساب لدينا لذلك تستطيع تسجيل حساب جديد من هنا </p>
                <a href="{{route('register')}}">
                    <i class="fa fa-user-plus"></i> تسجيل عضوية
                </a>
            </div>
            <!-- /.signup-form -->

            <!-- =========================================================================================================================================== -->

            <div class="panel-pop modal" id="forget">
                <div class="lost-inner">
                    <h1>هل نسيت كلمة المرور ؟</h1>
                    <div class="lost-item">
                        <input type="text" placeholder="الايميل المستخدم في تسجيل الدخول">
                    </div>
                    <!-- /.lost-item -->
                    <div class="text-center">
                        <input type="submit" value="إعادة ضبط">
                    </div>
                    <!-- /.lost-item -->
                </div>
                <!-- /.lost-inner -->
            </div>
            <!-- /.modal -->

            <!-- =========================================================================================================================================== -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /.login-area -->


    <div class="header-nav">
        <div class="container">
            <div class="nav-right col-md-8 col-xs-12 pull-right">
                <div class="logo">
                    <a href="index.html" title="العلوم العصرية للتدريب">
                        <img src="/App/images/logo.png" alt="site-logo" width="110" height="70">
                    </a>
                </div>
                <!-- /.logo -->
            </div>
            <!-- /.nav-logo -->
            <div class="nav-left col-md-4 col-xs-12 pull-left">
                <div class="user-controls">
                    <ul>
                        <li>
                            @if(! auth()->user())
                            <a href="#" class="show-login">
                                <i class="fa fa-user"></i> منطقة تسجيل الدخول
                            </a>
                            @else
                                    <div class="user-logged">
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="dropdown" class="hvr-underline-reveal ">
                                                <span class="cont-img">
                                                    <img src="/storage/{{auth()->user()->avatar}}" width="35" height="35" alt="">
                                                </span>

                                                    <b>{{auth()->user()->name}} </b>
                                                    <i class="fa fa-caret-down"></i>
                                                </a>
                                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                                    <div class="drop drop-links col-xs-12">
                                                        <div class="drop-links">
                                                            <ul>
                                                                <li>
                                                                    <a href="{{route('profile')}}">
                                                                        <i class="fa fa-user"></i>&nbsp; حسابي
                                                                    </a>
                                                                </li>
                                                                <li>

                                                                    <a href="{{route('logout')}}">
                                                                        <i class="fa fa-power-off"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <!-- end drop-links -->
                                                    </div>
                                                    <!-- end drop -->
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="#" class="show-user_search">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="show-notification" class="dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-bell"></i>
                                                </a>
                                                <ul class="dropdown-menu notification-box" role="menu" aria-labelledby="dropdownMenu">
                                                    <div class="drop drop-links col-xs-12">
                                                        <ul>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="images/avatar5.png" alt="" class="img-circle pull-right">
                                                                    <h4>
                                                                        امير ناجح
                                                                        <small><i class="fa fa-clock-o"></i>5 دقائق</small>
                                                                    </h4>
                                                                    <p> هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="images/avatar04.png" alt="" class="img-circle pull-right">
                                                                    <h4>
                                                                        حسني اديب
                                                                        <small><i class="fa fa-clock-o"></i>5 دقائق</small>
                                                                    </h4>
                                                                    <p> هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="images/avatar3.png" alt="" class="img-circle pull-right">
                                                                    <h4>
                                                                        مني سلامة
                                                                        <small><i class="fa fa-clock-o"></i>5 دقائق</small>
                                                                    </h4>
                                                                    <p> هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="images/b3.jpg" alt="" class="img-circle pull-right">
                                                                    <h4>
                                                                        امير ناجح
                                                                        <small><i class="fa fa-clock-o"></i>5 دقائق</small>
                                                                    </h4>
                                                                    <p> هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="images/avatar04.png" alt="" class="img-circle pull-right">
                                                                    <h4>
                                                                        حسني اديب
                                                                        <small><i class="fa fa-clock-o"></i>5 دقائق</small>
                                                                    </h4>
                                                                    <p> هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#">
                                                                    <img src="images/avatar3.png" alt="" class="img-circle pull-right">
                                                                    <h4>
                                                                        مني سلامة
                                                                        <small><i class="fa fa-clock-o"></i>5 دقائق</small>
                                                                    </h4>
                                                                    <p> هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها.</p>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- end drop -->
                                                </ul>
                                            </li>

                                        </ul>
                                    </div>

                                    <!-- /.user-controls -->


                            @endif                            <!-- /.nav-user -->


                                <div class="input-container user-search col-md-12 col-xs-12 input-lft">
                                    <div class="container">
                                        <input type="text" placeholder="ابحث عن جميع الكورسات من هنا">
                                        <button type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                    <!-- /.container -->
                                </div>


{{--                            <a>{{$date = date('H:i:s', time()) }} </a>--}}

                        </li>








                        <!--
                <li>
<a href="#">
<i class="fa fa-user-plus"></i> تسجيل عضوية
</a>
</li>
-->
                    </ul>
                </div>
                <!-- /.user-controls -->
            </div>
            <!-- /.nav-user -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.header-nav -->
</header>
<!-- /header -->
</div>
