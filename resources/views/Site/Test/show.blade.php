@extends('Site.Layouts.master')

@section('title')    @stop

@section('content')


    <div class="up-container">
        <div class="up-header text-center">
            <div class="container">
                <h1>{{$course->title}}</h1>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.up-header -->
        <div class="up-box">
            <div class="container">
                <div class="up-form">
                    <div id="tabsleft" class="tabbable tabs-left">
                        <ul>

                            @foreach($course->test as $count_test)
                                <li><a href="#tabsleft-tab{{$loop->iteration}}" data-toggle="tab">الخطوة {{$loop->iteration}}</a></li>

                            @endforeach
                        </ul>
                        <div id="bar" class="progress progress-info progress-striped">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                        </div>
                        <form action="{{route('test',$course->id)}}" method="post">
                            @csrf
                        <div class="tab-content">

                            @foreach($course->test as $item)
                            <div class="tab-pane" id="tabsleft-tab{{$loop->iteration}}">

                                <div class="quest text-right">

                            <input type="hidden" name="test_id" value="{{$item->id}}">
                                    <input type="hidden" name="user_id" value="{{Auth::id()}}">

                                    <div class="quest-head">
                                        <h1>{{$item->ask}}</h1>
                                    </div>
                                    <!-- end quest-head -->
                                    <div class="quest-answers">
                                        <div class="answer">
                                            <label>
                                                <input type="radio" name="check{{$loop->iteration}}" id="make-answer" value="1">
                                                <span>{{$item->answer_1}}</span>
                                            </label>
                                        </div>
                                        <!-- end answer -->

                                        <div class="answer">
                                            <label>
                                                <input type="radio" name="check{{$loop->iteration}}" id="make-answer" value="2">
                                                <span>{{$item->answer_2}}</span>
                                            </label>
                                        </div>
                                        <!-- end answer -->

                                        <div class="answer">
                                            <label>
                                                <input type="radio" name="check{{$loop->iteration}}" id="make-answer" value="3">
                                                <span>{{$item->answer_3}}</span>
                                            </label>
                                        </div>
                                        <!-- end answer -->

                                        <div class="answer">
                                            <label>
                                                <input type="radio" name="check{{$loop->iteration}}" id="make-answer" value="4">
                                                <span>{{$item->answer_4}}</span>
                                            </label>
                                        </div>

                                        <!-- end answer -->
                                    </div>

                                    <!-- end quest-answers -->
                                </div>

                                <!-- end quest --><br><p></p>
                                @endforeach
                            </div>


                            <ul class="pager wizard">
                                <!--                        <li class="previous first"><a href="javascript:;">First</a></li>-->
                                <li class="previous"><a href="javascript:;">الخطوة السابقة</a></li>
                                <!--                        <li class="next last"><a href="javascript:;">Last</a></li>-->
                                <li class="next"><a href="javascript:;">الخطوة التالية</a></li>
                                <li class="next finish" style="display:none;"> <button type="submit" class="text-left">انهاء</button></li>
                            </ul>
                        </div>
                        </form>
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
@section('footer')

    <script type="text/javascript">
        $('#tabsleft').bootstrapWizard({
            'tabClass': 'nav nav-tabs',
            'debug': false,
            onTabShow: function (tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index + 1;
                var $percent = ($current / $total) * 100;
                $('#tabsleft .progress-bar').css({
                    width: $percent + '%'
                });

                // If it's the last tab then hide the last button and show the finish instead
                if ($current >= $total) {
                    $('#tabsleft').find('.pager .next').hide();
                    $('#tabsleft').find('.pager .finish').show();
                    $('#tabsleft').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#tabsleft').find('.pager .next').show();
                    $('#tabsleft').find('.pager .finish').hide();
                }

            }
        });

        $('#tabsleft .finish').click(function () {
            alert('Finished!, Starting over!');
            $('#tabsleft').find("a[href*='tabsleft-tab1']").trigger('click');
        });
    </script>
@stop

