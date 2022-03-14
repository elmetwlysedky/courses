@extends('Site.Layouts.master')

@section('title')   @endsection


@section('content')


    <div class="allcourses-box">
        <div class="allcourses-head text-center">
            <div class="container">
                <h1>جميع الكورسات</h1>
                <div class="nav-left nav-mobile col-md-4 col-xs-12 pull-left">
                    <div class="user-logged">
                        <ul>
                            <li>
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" class="hvr-underline-reveal"><i class="fa fa-user"></i>
                                    <b>امير ناجح</b>

                                    <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                    <div class="drop drop-links col-xs-12">
                                        <div class="drop-links">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-user"></i>&nbsp; عرض الحساب
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-cog"></i>&nbsp; تعديل الحساب
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <i class="fa fa-power-off"></i>&nbsp; خروج
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- end drop-links -->
                                    </div>
                                    <!-- end drop -->
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- /.user-controls -->


                </div>
                <!-- /.nav-user -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.allcourses-head -->
        <div class="search-categories text-center">
            <div class="container">
                <div class="cat-item">
                    <div class="cat-inner col-md-6 col-sm-6 col-xs-6 pull-right">
                        <a href="#" class="show-cat">علوم الحاسب<i class="fa fa-caret-down"></i></a>
                        <div class="hidden-cat">
                            <ul>
                                <li>
                                    <a href="#">برمجة ويب</a>
                                </li>
                                <li>
                                    <a href="#">برمجة ويب</a>
                                </li>
                                <li>
                                    <a href="#">برمجة ويب</a>
                                </li>
                                <li>
                                    <a href="#">برمجة ويب</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- /. cat-inner -->
                    <div class="cat-inner col-md-6 col-sm-6 col-xs-6 pull-left">
                        <form>
                            <input type="search" placeholder="ابحث عن كورسات أخري">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <!-- /. cat-inner -->
                </div>
                <!-- /.cat-item -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.search-categories -->
        <div class="allcourses-body">
            <div class="container">
                <div class="row">
                    <div class="row block-container">
                    @foreach($courses as $item)
                        <div class="block col-md-4">
                            <figure>
                                <div><img src="/storage/{{$item->image}}" alt="img05" class="img-responsive"></div>
                                <figcaption class="text-right">
                                    <h1>
                                        <label>اسم الكورس</label>
                                        <span>{{$item->title}}</span>
                                    </h1>
                                    <h1>
                                        <label>اسم المدرس</label>
                                        <span>{{$item->teacher->name}}</span>

                                    </h1>
                                    <h1>
                                        <label>عدد الطلبة المشتركة</label>
                                        <span>{{$item->users->count()}}</span>

                                    </h1>
                                    <h1>
                                        <label>تاريخ بداية الكورس</label>
                                        <span>{{$item->created_at->format('d/m/Y')}}0</span>

                                    </h1>
                                    <h1>
                                        <label>تقييم الكورس</label>
                                        <span>جيد</span>

                                    </h1>
                                    <a href="{{route('course.intro',$item->id)}}">
                                        <i class="fa fa-eye"></i> مشاهدة الكورس
                                    </a>
                                </figcaption>
                            </figure>
                        </div>
                    @endforeach
                        <!-- /.block -->

                        <!-- /.block -->

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.row -->
                <div class="inner col-xs-12 text-center">

                {!! $courses->links() !!}


            </div>
            <!-- /.container -->
        </div>
        <!-- /.allcourses-body -->
    </div>
    <!-- /.allcourses-box -->


@endsection
