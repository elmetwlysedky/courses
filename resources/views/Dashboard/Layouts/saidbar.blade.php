
<div class="page-content">
<!-- Main sidebar -->
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-right8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="card-body">
                <div class="media">
                    <div class="mr-3">
                        <a href="#"><img src="/Dashboard/global_assets/images/placeholders/placeholder.jpg" width="38" height="38" class="rounded-circle" alt=""></a>
                    </div>

                    <div class="media-body">
                        <div class="media-title font-weight-semibold">{{auth()->user()->name}}</div>
                        <div class="font-size-xs opacity-50">
                            <i class="icon-pin font-size-sm"></i> &nbsp;{{auth()->user()->email}}
                        </div>
                    </div>

                    <div class="ml-3 align-self-center">
                        <a href="#" class="text-white"><i class="icon-cog3"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
                <li class="nav-item">
                    <a href="{{route('admin.home')}}" class="nav-link active">
                        <i class="icon-home4"></i>
                        <span>الصفة الرئيسيه</span>

                    </a>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-users mr-3"></i> <span>المستخدمين</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">

                        <li class="nav-item"><a href="{{route('user.index')}}" class="nav-link">قائمة المستخدمين</a></li>
                        <li class="nav-item"><a href="{{route('user.create')}}" class="nav-link">انشاء مستخدم جديد</a></li>

                    </ul>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-pencil3"></i> <span>الاهتمامات</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">

                        <li class="nav-item"><a href="{{route('interest.index')}}" class="nav-link">قائمة الاهتمامات</a></li>
                        <li class="nav-item"><a href="{{route('interest.create')}}" class="nav-link">اضافة اهتمام</a></li>

                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-color-sampler"></i> <span>الدول</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Themes">
                        <li class="nav-item"><a href="{{route('country.index')}}" class="nav-link">قائمة الدول</a></li>
                        <li class="nav-item"><a href="{{route('country.create')}}" class="nav-link">اضافة دوله</a></li>

                    </ul>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-pencil3"></i> <span>اهتمامات المستحدمين </span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">

                        <li class="nav-item"><a href="{{route('userInterest.index')}}" class="nav-link">قائمة اهتمامات المستحدمين</a></li>
                        <li class="nav-item"><a href="{{route('userInterest.create')}}" class="nav-link">اضافة اهتمام للمستحدم</a></li>

                    </ul>
                </li>

                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-stack"></i> <span>المدربين</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                        <li class="nav-item"><a href="{{route('teacher.index')}}" class="nav-link">قائمة المدربين</a></li>
                        <li class="nav-item"><a href="{{route('teacher.create')}}" class="nav-link">اضافة مدرب</a></li>

                    </ul>
                </li>


                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-clapboard-play mr-3"></i> <span>الكورسات</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Starter kit">
                        <li class="nav-item"><a href="{{route('course.index')}}" class="nav-link">قائمة الكورسات</a></li>
                        <li class="nav-item"><a href="{{route('course.create')}}" class="nav-link">اضافة كورس</a></li>

                    </ul>
                </li>

                <!-- /forms -->







            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>
<!-- /main sidebar -->
