@extends('Site.Layouts.master')

@section('title')    @stop

@section('content')


    <div class="up-container">
        <div class="up-header text-center">
            <div class="container">
                <h1>دورة البرمجة بلغة الجافا</h1>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.up-header -->
        <div class="up-box">
            <div class="container">
                <div class="up-form">
                    <div id="tabsleft" class="tabbable tabs-left">
                        <ul>
                            <li><a href="#tabsleft-tab1" data-toggle="tab">الخطوة 1</a></li>
                            <li><a href="#tabsleft-tab2" data-toggle="tab">الخطوة 2</a></li>
                            <li><a href="#tabsleft-tab3" data-toggle="tab">الخطوة 3</a></li>
                            <li><a href="#tabsleft-tab4" data-toggle="tab">الخطوة 4</a></li>
                            <li><a href="#tabsleft-tab5" data-toggle="tab">الخطوة 5</a></li>
                            <li><a href="#tabsleft-tab6" data-toggle="tab">الخطوة 6</a></li>
                            <li><a href="#tabsleft-tab7" data-toggle="tab">الخطوة 7</a></li>
                        </ul>
                        <div id="bar" class="progress progress-info progress-striped">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane" id="tabsleft-tab1">
                                <div class="quest text-right">
                                    <div class="quest-head">
                                        <h1>تحيا مصر وافريقيا تحيا مصر وافريقيا ؟</h1>
                                    </div>
                                    <!-- end quest-head -->
                                    <div class="quest-answers">
                                        <div class="answer">
                                            <label>
                                                <input type="radio" name="k" id="make-answer">
                                                <span>دي الاجابة الصحيحة اعتقد</span>
                                            </label>
                                        </div>
                                        <!-- end answer -->

                                        <div class="answer">
                                            <label>
                                                <input type="radio" name="k" id="make-answer">
                                                <span>دي الاجابة الصحيحة اعتقد</span>
                                            </label>
                                        </div>
                                        <!-- end answer -->

                                        <div class="answer">
                                            <label>
                                                <input type="radio" name="k" id="make-answer">
                                                <span>دي الاجابة الصحيحة اعتقد</span>
                                            </label>
                                        </div>
                                        <!-- end answer -->

                                        <div class="answer">
                                            <label>
                                                <input type="radio" name="k" id="make-answer">
                                                <span>دي الاجابة الصحيحة اعتقد</span>
                                            </label>
                                        </div>
                                        <!-- end answer -->
                                    </div>
                                    <!-- end quest-answers -->
                                </div>
                                <!-- end quest -->
                            </div>
                            <ul class="pager wizard">
                                <!--                        <li class="previous first"><a href="javascript:;">First</a></li>-->
                                <li class="previous"><a href="javascript:;">الخطوة السابقة</a></li>
                                <!--                        <li class="next last"><a href="javascript:;">Last</a></li>-->
                                <li class="next"><a href="javascript:;">الخطوة التالية</a></li>
                                <li class="next finish" style="display:none;"><a href="javascript:;">انهاء</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.up-form -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.up-box -->
    </div>
    <!-- /.up-container -->




@endsection


