

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
                <h1>تسجيل الدخول</h1>
                <div class="login-item">
                    <input name="name" type="text" placeholder="إسم المستخدم">
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
                <a href="signup.html">
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
                            <a href="#" class="show-login">
                                <i class="fa fa-user"></i> منطقة تسجيل الدخول
                            </a>

                            <a  class="show-login">{{$date = date('H:i:s', time()) }} </a>

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
