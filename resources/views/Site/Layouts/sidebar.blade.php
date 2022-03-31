
<div class="wrapper st-container" id="st-container">
    <!-- content push wrapper -->
    <div class="st-pusher">

        <nav class="st-menu st-effect-8" id="menu-8">
                <span class="close-nav" title="Close">
                    <i class="fa fa-times"></i>
                </span>
            <h2 class="icon icon-stack">
                <img src="/App/images/logo.png" class="img-responsive">
            </h2>
            <ul>
                <li><a class="icon icon-data" href="{{route('main')}}"><i class="fa fa-user"></i> الرئيسية</a></li>
                <li><a id="sd" class="icon icon-location" href="{{route('about')}}"><i class="fa fa-group"></i>من نحن</a></li>
                <li><a class="icon icon-study" href="{{route('site.course.create')}}"><i class="fa fa-plus"></i> اضافة دورة</a></li>
{{--                <li><a class="icon icon-photo" href="add-lecture.html"><i class="fa fa-plus"></i>اضافة محاضرة</a></li>--}}
{{--                <li><a class="icon icon-wallet" href=""><i class="fa fa-plus"></i>اضافة اختبار</a></li>--}}
                <li><a class="icon icon-data" href="{{route('site.course.all')}}"><i class="fa fa-database"></i>جميع الدورات</a></li>
{{--                <li><a class="icon icon-location" href="category-result.html"><i class="fa fa-rocket"></i>قسم معين</a></li>--}}
{{--                <li><a class="icon icon-study" href="certif.html"><i class="fa fa-file"></i>شهادة التقدير</a></li>--}}
                <li><a class="icon icon-photo" href="{{route('contact.create')}}"><i class="fa fa-phone"></i>اتصل بنا</a></li>
{{--                <li><a class="icon icon-wallet" href="course-alerts.html"><i class="fa fa-alerts"></i>التنبيهات</a></li>--}}
{{--                <li><a class="icon icon-data" href="course-comments.html"><i class="fa fa-comments"></i>التعليقات</a></li>--}}
{{--                <li><a class="icon icon-location" href="course-individual.html"><i class="fa fa-rocket"></i>درس معين</a></li>--}}
{{--                <li><a class="icon icon-study" href="course-intro.html">مقدمة الدرس</a></li>--}}
{{--                <li><a class="icon icon-photo" href="course-page.html">صفحة الدرس</a></li>--}}
                <li><a class="icon icon-wallet" href="{{route('profile')}}"><i class="fa fa-user"></i>الحساب الشخصي</a></li>
{{--                <li><a class="icon icon-data" href="reset-passowrd.html">تغير كلمة المرور</a></li>--}}
{{--                <li><a class="icon icon-location" href="signup.html"><i class="fa fa-user-plus"></i>تسجيل حساب جديد</a></li>--}}
{{--                <li><a class="icon icon-study" href="test-show.html">صفحة الاختبار</a></li>--}}
{{--                <li><a class="icon icon-photo" href="trainer-privacy.html"><i class="fa fa-lock"></i>سياسة الخصوصية</a></li>--}}
            </ul>
        </nav>


        <div class="st-content">

            <!-- /.dividers -->

            <div id="st-trigger-effects" class="column">
                @if( auth()->user())
                <button data-effect="st-effect-8" class="st_show">
                    <i class="fa fa-bars"></i>
                </button>
                @endif
            </div>

