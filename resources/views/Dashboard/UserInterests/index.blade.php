
@extends('Dashboard.Layouts.master')

@section('title')
    اهتمامات المستخدمين
@endsection

@section('content')



        <!-- Custom handle -->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">اهتمامات المستخدمين</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="reload"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <ul class="media-list media-list-linked">
                <li class="media font-weight-semibold border-0 py-1"></li>
                @isset($user)
                    @foreach($user as $item)
                        <li>
                            <div class="media">
                                <div class="mr-3"><img src="/storage/{{$item->avatar}}" class="rounded-circle" width="40" height="40" alt=""></div>
                                <div class="media-body">
                                    <div class="media-title font-weight-semibold">{{$item->name}}</div>
                                    <span class="text-muted"></span>
                                </div>
                                <div class="align-self-center ml-3">
                                    <a href="#" class="text-default" data-toggle="collapse" data-target="#james2">
                                        <i class="icon-menu7"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="collapse" id="james2">
                                <div class="card-body bg-light border-top border-bottom">
                                    <ul class="list list-unstyled mb-0">
                                        @foreach($item->interests as $inter)
                                        <li><i class="icon-pin mr-2"></i> {{$inter->name}}</li>
                                        @endforeach
{{--                                        <li><i class="icon-user-tie mr-2"></i> {{$item->gender_string}}</li>--}}
{{--                                        <li><i class="icon-phone mr-2"></i> {{$item_s->phone}}</li>--}}
{{--                                        <li><i class="icon-mail5 mr-2"></i> <a href="#">{{$item_s->email}}</a></li>--}}
                                    </ul>
                                </div>
                            </div>
                        </li>
                    @endforeach
                @endisset
            </ul>
        </div>



@stop
