<div role="tabpanel" class="tab-pane fade" id="password">
    <div class="home-head">
        <h1>
            <i class="fa fa-lock"></i>
            كلمة المرور
        </h1>
        <a class="edit-password">
            <i class="fa fa-cog"></i> تعديل البيانات
        </a>
        <button class="cancel-password" type="reset">
            <i class="fa fa-times"></i> إلغاء التعديل
        </button>
    </div>
    <!-- /.home-head -->

    <div class="home-content pass-content col-xs-12">

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if($errors)
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif


        <form class="form-horizontal" method="post" action="{{ route('changePasswordPost') }}">
            @csrf
            <div class="home_data col-xs-12 pull-right text-right">
                <div class="home_data-item all-pass col-md-12  col-xs-12 pull-right">
                    <div>
                        <i class="fa fa-lock"></i>
                        <h1>كلمة المرور القديمة</h1>
                        <input id="current-password" type="password" class="form-control" name="current-password" required>

                        @if ($errors->has('current-password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('current-password') }}</strong>
                                    </span>
                        @endif


                    </div>
                </div>
                <!-- /.home_data-item -->

                <div class="home_data-item all-pass col-md-12  col-xs-12 pull-right">
                    <div>
                        <i class="fa fa-unlock"></i>
                        <h1>كلمة المرور الجديدة</h1>
                        <input id="new-password" type="password" class="form-control" name="new-password" required>

                        @if ($errors->has('new-password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('new-password') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <!-- /.home_data-item -->

                <div class="home_data-item all-pass col-md-12  col-xs-12 pull-right">
                    <div>
                        <i class="fa fa-lock"></i>
                        <h1>إعادة كتابة كلمة المرور الجديدة</h1>
                        <input id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required>

                    </div>
                </div>
                <!-- /.home_data-item -->
                <div class="home_data-item all-pass col-md-12 col-sm-12  col-xs-12 pull-right">
                    <input type="submit" value="حفظ التعديلات" class="confirm-set-password">
                </div>
                <!-- /.home_data-item -->
            </div>
        </form>
        <!-- ./home_data -->
    </div>
    <!-- /.home-content -->
</div>
