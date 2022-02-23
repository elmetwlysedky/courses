@extends('Site.Layouts.master')

@section('content')



<div class="search-box">
    <div class="container">
        <div class="search-inner">
            <h1 class="text-center">تستطيع من خلال موقعنا البحث  عن كل ما تريد من كورسات </h1>
            <form action="#" method="get">
                <div class="form-item col-xs-12">
                    <div class="input-container col-md-10 col-xs-12 input-lft pull-right">
                        <input type="text" placeholder="ابحث عن جميع الكورسات من هنا">
                    </div>
                    <!-- /.input-container -->
                    <div class="btn-container col-md-1 btn-right">
                        <a class="show-advanced">
                            بحث متقدم
                        </a>
                    </div>
                    <!-- end btn-container -->
                    <div class="btn-container col-md-1">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                    <!-- end btn-container -->
                </div>
                <!-- /.form-item -->
                <div class="form-advanced col-xs-12 adv-left">
                    <div class="advanced-item col-md-3 col-xs-12 pull-right">
                        <h2>ابحث بسعر الكورس</h2>
                        <input type="text" placeholder="ابحث بإسم المدرس">
                    </div>
                    <!-- /.advanced-item -->
                    <div class="advanced-item col-md-3 col-xs-12 pull-right">
                        <h2>ابحث بسعر الكورس</h2>
                        <input type="text" placeholder="ابحث بإسم الكورس">
                    </div>
                    <!-- /.advanced-item -->
                    <div class="advanced-item col-md-3 col-xs-12 pull-right">
                        <h2>ابحث بسعر الكورس</h2>
                        <input type="text" placeholder="ابحث بنوع الكورس">
                    </div>
                    <!-- /.advanced-item -->
                    <div class="advanced-item col-md-3 col-xs-12 adv-right pull-right">
                        <h2>ابحث بسعر الكورس</h2>

                        <input placeholder="من" type="number" class="pull-right price-from" data-toggle="tooltip" data-placement="top" title="مـن">
                        <input placeholder="إلي" type="number" class="price-to" data-toggle="tooltip" data-placement="top" title="إلـي">
                        <div class="text-right price-spec">
                            <label id="ko">
                                <input type="checkbox" class="price-free"> مجاني
                            </label>
                        </div>
                    </div>
                    <!-- /.advanced-item -->
                </div>
                <!-- /.form-advanced -->
            </form>
        </div>
        <!-- /.search-inner -->
    </div>
    <!-- /.container -->
</div>
<!-- /.search-box -->

<div class="container">
    <div class="courses-head text-center">
        <h1>أحدث الكورسات</h1>
    </div>
    <!-- /.testominal-head -->
    <div class="row block-container">

        <div class="block col-md-4 col-sm-6">
            <figure>
                <div><img src="/App/images/b3.jpg" alt="img05" class="img-responsive"></div>
                <figcaption class="text-right">
                    <h1>اسم الكورس</h1>
                    <h1>اسم المدرس</h1>
                    <h1>عدد الطلبة المشتركة</h1>
                    <h1>تاريخ بداية الكورس</h1>
                    <h1>تقييم الكورس</h1>
                    <a href="#">
                        <i class="fa fa-eye"></i> مشاهدة الكورس
                    </a>
                </figcaption>
            </figure>
        </div>
        <!-- /.block -->
        <div class="block col-md-4 col-sm-6">
            <figure>
                <div><img src="/App/images/event_1.jpg" alt="img05" class="img-responsive"></div>
                <figcaption class="text-right">
                    <h1>
                        <label>اسم الكورس</label>
                        <span>علوم حاسب</span>
                    </h1>
                    <h1>
                        <label>اسم المدرس</label>
                        <span>علوم حاسب</span>

                    </h1>
                    <h1>
                        <label>عدد الطلبة المشتركة</label>
                        <span>300</span>

                    </h1>
                    <h1>
                        <label>تاريخ بداية الكورس</label>
                        <span>مارس 10</span>

                    </h1>
                    <h1>
                        <label>تقييم الكورس</label>
                        <span>جيد</span>

                    </h1>
                    <a href="#">
                        <i class="fa fa-eye"></i> مشاهدة الكورس
                    </a>
                </figcaption>
            </figure>
        </div>
        <!-- /.block -->
        <div class="block col-md-4 col-sm-6">
            <figure>
                <div><img src="/App/images/b3.jpg" alt="img05" class="img-responsive"></div>
                <figcaption class="text-right">
                    <h1>اسم الكورس</h1>
                    <h1>اسم المدرس</h1>
                    <h1>عدد الطلبة المشتركة</h1>
                    <h1>تاريخ بداية الكورس</h1>
                    <h1>تقييم الكورس</h1>
                    <a href="#">
                        <i class="fa fa-eye"></i> مشاهدة الكورس
                    </a>
                </figcaption>
            </figure>
        </div>
        <!-- /.block -->
        <div class="block col-md-4 col-sm-6">
            <figure>
                <div><img src="/App/images/b3.jpg" alt="img05" class="img-responsive"></div>
                <figcaption class="text-right">
                    <h1>اسم الكورس</h1>
                    <h1>اسم المدرس</h1>
                    <h1>عدد الطلبة المشتركة</h1>
                    <h1>تاريخ بداية الكورس</h1>
                    <h1>تقييم الكورس</h1>
                    <a href="#">
                        <i class="fa fa-eye"></i> مشاهدة الكورس
                    </a>
                </figcaption>
            </figure>
        </div>
        <!-- /.block -->
        <div class="block col-md-4 col-sm-6">
            <figure>
                <div><img src="/App/images/b3.jpg" alt="img05" class="img-responsive"></div>
                <figcaption class="text-right">
                    <h1>اسم الكورس</h1>
                    <h1>اسم المدرس</h1>
                    <h1>عدد الطلبة المشتركة</h1>
                    <h1>تاريخ بداية الكورس</h1>
                    <h1>تقييم الكورس</h1>
                    <a href="#">
                        <i class="fa fa-eye"></i> مشاهدة الكورس
                    </a>
                </figcaption>
            </figure>
        </div>
        <!-- /.block -->
        <div class="block col-md-4 col-sm-6">
            <figure>
                <div><img src="/App/images/b3.jpg" alt="img05" class="img-responsive"></div>
                <figcaption class="text-right">
                    <h1>اسم الكورس</h1>
                    <h1>اسم المدرس</h1>
                    <h1>عدد الطلبة المشتركة</h1>
                    <h1>تاريخ بداية الكورس</h1>
                    <h1>تقييم الكورس</h1>
                    <a href="#">
                        <i class="fa fa-eye"></i> مشاهدة الكورس
                    </a>
                </figcaption>
            </figure>
        </div>
        <!-- /.block -->


    </div>
    <!-- /.row -->

    <div class="all-courses text-center">
        <a href="all-courses.html">عرض جميع الكورسات</a>
    </div>
    <!-- /.all-courses -->

</div>
<!-- /.conainer -->
@endsection
