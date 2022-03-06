@extends('Dashboard.Layouts.master')

@section('title')
    المستخدمين
@endsection



@section('content')

    <!-- Basic datatable -->
    <div class="card"	>
        <div class="card-header header-elements-inline">
            <h5 class="card-title">جدول المستخدمين</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <a href="{{route('user.create')}}">
            <button class="btn bg-teal "><b><i class="icon-plus3"></i></b>
               اضافة مستخدم
            </button>
            </a>
        </div>

        <table class="table datatable-basic">
            <thead>
            <tr>
                <th>الصورة</th>
                <th> الاسم</th>
                <th> البريد الالكتروني</th>
                <th> الهاتف</th>
                <th> الدوله</th>
                <th> الصلاحيه</th>
                <th>النوع</th>
                <th class="text-center">العمليات</th>
            </tr>
            </thead>
            <tbody>
            @isset($users)
                @foreach($users as $item)
            <tr>
                <td class="mr-3"><img src="/storage/{{$item  ->avatar}}" class="rounded-circle" width="40" height="40" alt=""></td>

                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->country->name}}</td>
                <td>{{$item->teacher_string}}</td>
                <td>{{$item->gender_string}}</td>

                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu ">
                                <a href="{{route('user.show',$item->id)}}" class="dropdown-item"><i class="icon-file-eye2 mr-3 icon"></i> عرض </a>
                                <a href="{{route('user.edit',$item->id)}}"class="dropdown-item"><i class="icon-pencil7"></i> تعديل </a>

                                <form action="{{route('user.destroy',$item->id)}}" method="POST" >
                                    @csrf
                                    @method('DELETE')

                                    <button class="dropdown-item" type="submit"><i class="icon-bin"> </i>حذف</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </td>
            </tr>
                @endforeach
            @endisset

            </tbody>
        </table>
    </div>
    <!-- /basic datatable -->








    <div class="row">
        <div class="col-md-6">

            <!-- Collapsible list -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">المدرسين</h5>
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

                    @isset($teacher)
                        @foreach($teacher as $item)
                    <li>
                        <a href="#" class="media" data-toggle="collapse" data-target="#james">
                            <div class="mr-3"><img src="/storage/{{$item->avatar}}" class="rounded-circle" width="40" height="40" alt=""></div>
                            <div class="media-body">
                                <div class="media-title font-weight-semibold">{{$item->name}}</div>
                                <span class="text-muted">Last.fm</span>
                            </div>
                            <div class="align-self-center ml-3">
                                <span class="badge badge-mark border-success"></span>
                            </div>
                        </a>

                        <div class="collapse" id="james">
                            <div class="card-body bg-light border-top border-bottom">
                                <ul class="list list-unstyled mb-0">
                                    <li><i class="icon-pin mr-2"></i> {{$item->country->name}}</li>
                                    <li><i class="icon-user-tie mr-2"></i> {{$item->gender_string}}</li>
                                    <li><i class="icon-phone mr-2"></i> {{$item->phone}}</li>
                                    <li><i class="icon-mail5 mr-2"></i> <a href="#">{{$item->email}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        @endforeach
                    @endisset
                </ul>
            </div>
        </div>


        <div class="col-md-6">

            <!-- Custom handle -->
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">الطلاب</h5>
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
                    @isset($student)
                        @foreach($student as $item_s)
                    <li>
                        <div class="media">
                            <div class="mr-3"><img src="/storage/{{$item_s->avatar}}" class="rounded-circle" width="40" height="40" alt=""></div>
                            <div class="media-body">
                                <div class="media-title font-weight-semibold">{{$item_s->name}}</div>
                                <span class="text-muted">Last.fm</span>
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
                                    <li><i class="icon-pin mr-2"></i> {{$item_s->country->name}}</li>
                                    <li><i class="icon-user-tie mr-2"></i> {{$item->gender_string}}</li>
                                    <li><i class="icon-phone mr-2"></i> {{$item_s->phone}}</li>
                                    <li><i class="icon-mail5 mr-2"></i> <a href="#">{{$item_s->email}}</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                        @endforeach
                    @endisset
                </ul>
            </div>
        </div>
    </div>








@endsection
