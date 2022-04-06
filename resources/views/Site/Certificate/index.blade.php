@extends('Site.Layouts.master')

@section('title')   @stop

@section('content')


    <div class="up-container">
        <div class="up-header text-center">
            <div class="container">
                <h1>مبروك لقد اتممت هذه الدورة بنجاح</h1>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.up-header -->
        <div class="up-box">
            <div class="container">
                <div class="up-form certf-container">
                    <div class="certficat-box text-center" id="Certification">
                        <h1>شهادة اتمام دورة</h1>
                        <span>تمنح الي الطالب</span>
                        <h2>{{auth()->user()->name}}</h2>
                        <h4>لإجتيازه اختبار </h4>
                        <p>{{$course->title}}</p>

                        <div class="admin-log">
                            <div class="cer-date">
                                تاريخ
                            </div>
                            <div class="date">
                                {{$date->isoFormat('MM/DD/YYYY')}}
                            </div>
                        </div>
                        <div class="admin-log1">
                            <div class="cer-date">
                                توقيع
                            </div>
                            <div class="date">
                                {{$course->teacher->name}}
                            </div>
                        </div>

                    </div>
                        <br>
                        <br>
                    <input class="btn-success" type="button" onclick="printDiv('Certification')" value="طباعة الشهادة" />

                    <!-- end certificate-box -->
                </div>
                <!-- /.up-form -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.up-box -->
    </div>
    <!-- /.up-container -->
@stop
@section('footer')

    <script language="javascript" type="text/javascript">
        function printDiv(Certification) {
            var printContents = document.getElementById(Certification).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>

@stop
