@extends('Dashboard.Layouts.master')

@section('content')

    <!-- Page header -->
    <div class="card">
        <div class="page-header page-header-light">
            <div class="page-header-content header-elements-md-inline">
                <div class="page-title d-flex">
                    <h4><i class="icon-arrow-right6 mr-2"></i> <span class="font-weight-semibold">Home</span> - Dashboard</h4>
                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

            </div>

            <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                <div class="d-flex">
                    <div class="breadcrumb">
                        <a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                        <span class="breadcrumb-item active">Dashboard</span>
                    </div>

                    <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                </div>

                <div class="header-elements d-none">
                    <div class="breadcrumb justify-content-center">

                        <div class="breadcrumb-elements-item dropdown p-0">
                            <a href="#" class="breadcrumb-elements-item dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-gear mr-2"></i>
                                Settings
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item"><i class="icon-user-lock"></i> Account security</a>
                                <a href="#" class="dropdown-item"><i class="icon-statistics"></i> Analytics</a>
                                <a href="#" class="dropdown-item"><i class="icon-accessibility"></i> Accessibility</a>
                                <div class="dropdown-divider"></div>
                                <a href="#" class="dropdown-item"><i class="icon-gear"></i> All settings</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page header -->



    <!-- Daily financials -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="font-weight-semibold">Site stats</h5>
            <div class="header-elements">

            </div>
        </div>

        <div class="card-body">


            <ul class="media-list">

                <li class="media">
                    <div class="mr-3">
                        <a href="#" class="btn bg-transparent border-pink text-pink rounded-round border-2 btn-icon"><i class="icon-users "></i></a>
                    </div>

                    <div class="media-body">
                        <h6>عدد مستخدمين الموقع <a href="">{{$users->count()}}</a></h6>
                        <div class="text-muted"></div>
                    </div>
                </li>

                <li class="media">
                    <div class="mr-3">
                        <a href="#" class="btn bg-transparent border-pink text-pink rounded-round border-2 btn-icon"><i class="icon-graduation2 "></i></a>
                    </div>

                    <div class="media-body">
                        <h6>عدد طلاب المستخدمين للموقع  <a href="">{{$students->count()}}</a></h6>
                        <div class="text-muted"></div>
                    </div>
                </li>

                <li class="media">
                    <div class="mr-3">
                        <a href="#" class="btn bg-transparent border-pink text-pink rounded-round border-2 btn-icon"><i class="icon-user-tie "></i></a>
                    </div>

                    <div class="media-body">
                        <h6>عدد المدربين والمدرسين المستخدمين للموقع <a href="">{{$teachers->count()}}</a></h6>
                        <div class="text-muted"></div>
                    </div>
                </li>

                <li class="media">
                    <div class="mr-3">
                        <a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i class="icon-clapboard-play"></i></a>
                    </div>

                    <div class="media-body">
                        <h6> عدد الكورسات المسجلهة في الموقع<a href="#"> <strong> {{$courses->count()}} </strong></a></h6>
                        <div class="text-muted">Dec 18, 18:36</div>
                    </div>
                </li>

                <li class="media">
                    <div class="mr-3">
                        <a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i class="icon-clapboard-play"></i></a>
                    </div>

                    <div class="media-body">
                        <h6>عدد الكورسات المفعله لدى المدربين<a href="#"> <b>{{$course_active->count()}}</b></a></h6>
                        <div class="text-muted">Dec 18, 18:36</div>
                    </div>
                </li>

                <li class="media">
                    <div class="mr-3">
                        <a href="#" class="btn bg-transparent border-success text-success rounded-round border-2 btn-icon"><i class="icon-clapboard-play"></i></a>
                    </div>

                    <div class="media-body">
                        <h6> عدد الكورسات الغير مفعله لدى المدربين<a href="#"> {{$course_not_active->count()}}</a></h6>
                        <div class="text-muted">Dec 18, 18:36</div>
                    </div>
                </li>

                <li class="media">
                    <div class="mr-3">
                        <a href="#" class="btn bg-transparent border-teal text-teal rounded-round border-2 btn-icon"><i class="icon-film4"></i></a>
                    </div>

                    <div class="media-body">
                        <h6> عدد دروس الكورسات في المسجلة في الموقع<a href="#">{{$lessons->count()}}</a></h6>
                        <div class="text-muted">Dec 12, 05:46</div>
                    </div>

                </li>

                <li class="media">
                    <div class="mr-3">
                        <a href="#" class="btn bg-transparent border-primary text-primary rounded-round border-2 btn-icon"><i class="icon-flag3"></i></a>
                    </div>
                    <div class="media-body">
                        <h6>عدد الدول المتاح التسجيل من خلالها في الموقع<a href="#">{{$countries->count()}}</a></h6>
                        <div class="text-muted">36 minutes ago</div>
                    </div>
                </li>

                <li class="media">
                    <div class="mr-3">
                        <a href="#" class="btn bg-transparent border-warning-400 text-warning-400 rounded-round border-2 btn-icon"><i class="icon-pencil3"></i></a>
                    </div>
                    <div class="media-body">
                        <h6> عدد الاهتمامات الممكن اختيارها لدى المدربين والطلاب والكورسات<a href="#">{{$interests->count()}}</a></h6>
                        <div class="text-muted">4 minutes ago</div>
                    </div>
                </li>

                <li class="media">
                    <div class="mr-3">
                        <a href="#" class="btn bg-transparent border-teal text-teal rounded-round border-2 btn-icon"><i class="icon-play"></i></a>
                    </div>
                    <div class="media-body">
                        <h6>عدد اشتراكات الطلاب في الكورسات <a href="#">{{$course_users->count()}}</a></h6>
                        <div class="text-muted">Dec 12, 05:46</div>
                    </div>
                </li>

                <li class="media">
                    <div class="mr-3">
                        <a href="#" class="btn bg-transparent border-teal text-teal rounded-round border-2 btn-icon"><i class="icon-unlocked2"></i></a>
                    </div>
                    <div class="media-body">
                        <h6>عدد الاشتراكات المفعله <a href="#">{{$course_users_active->count()}}</a></h6>
                        <div class="text-muted">Dec 12, 05:46</div>
                    </div>
                </li>

                <li class="media">
                    <div class="mr-3">
                        <a href="#" class="btn bg-transparent border-teal text-teal rounded-round border-2 btn-icon"><i class="icon-lock5"></i></a>
                    </div>
                    <div class="media-body">
                        <h6>عدد الاشتراكات الغير مفعله  <a href="#">{{$course_users_not_active->count()}}</a></h6>

                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- /daily financials -->

@endsection
