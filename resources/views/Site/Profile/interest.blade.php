<div role="tabpanel" class="tab-pane fade" id="interests">
    <div class="home-head">
        <h1>
            <i class="fa fa-diamond"></i>
            الاهتمامات
        </h1>
    </div>
    <!-- /.home-head -->
    <div class="home-content pass-content col-xs-12">
        <div class="home_data col-xs-12 pull-right text-right">
            <div class="interest-show">
                <ul>
                    @foreach(auth()->user()->interests as $item)
                    <li>
                                                    <span class="inter-item">{{$item->name}}
                                                        <i class="fa fa-times" id="del-item"></i>
                                                    </span>
                    </li>
                    @endforeach

                </ul>
            </div>
            <!-- /.interest-show -->
            <div class="add-interest">
                <a>
                    <i class="fa fa-plus"></i> أضف اهتمامات أخري
                </a>
            </div>
            <!-- /.add-interest -->
            <form action="{{route('user.interest')}}" method="post">
                @csrf

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <input type="hidden" name="user_id" value="{{auth()->user()->id}}">

            <div class="home_data-item col-md-12  col-xs-12 pull-right">

                <div class="interest-cont col-xs-12">
                    @foreach($interest as $item2)
                    <div class="interest-item col-md-4 col-sm-4 col-xs-6">
                        <label>
                            <input type="checkbox" name="interest_id[]" value="{{$item2->id}}" >
                            <span>{{$item2->name}}</span>
                        </label>
                    </div>
                @endforeach
                    <!-- /.interest-item -->

                </div>
                <!-- /.interest-cont -->
                <div class="interst-gender col-xs-12">
                    <h1>نوع الدورات التي تفضل متابعتها </h1>
                    <div class="add_cont text-right">
                        <label class="text-right">
                            <input type="checkbox">
                            <span>ذكور</span>
                        </label>
                        <label class="text-right">
                            <input type="checkbox">
                            <span>إناث</span>
                        </label>
                    </div>
                    <div class="cv-file text-left">
                        <input type="submit" value="حفظ">
                    </div>
                </div>
                <!-- /.interest-gender -->
            </div>
            </form>
            <!-- /.home_data-item -->
        </div>
        <!-- ./home_data -->
    </div>
    <!-- /.home-content -->
</div>
