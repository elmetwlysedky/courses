@extends('Dashboard.Layouts.master')

@section('title')
    المدربين
@endsection



@section('content')

    <!-- Basic datatable -->
    <div class="card"	>
        <div class="card-header header-elements-inline">
            <h5 class="card-title">جدول المدربين</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <a href="{{route('teacher.create')}}">
                <button class="btn bg-teal "><b><i class="icon-plus3"></i></b>
                  اضافة مدرب
                </button>
            </a>
        </div>

        <table class="table datatable-basic">
            <thead>
            <tr>
                <th>الصورة الشخصيه</th>
                <th> الاسم</th>
                <th> البريد الالكتروني</th>
                <th> الوظيفة</th>

                <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @isset($teacher)
                @foreach($teacher as $item)
                    <tr>
                        <td class="mr-3"><img src="/storage/{{$item->user->avatar}}" class="rounded-circle" width="40" height="40" alt=""></td>
                        <td>{{$item->user->name}}</td>
                        <td>{{$item->user->email}}</td>
                        <td>{{$item->employment}}</td>



                        <td class="text-center">
                            <div class="list-icons">
                                <div class="dropdown">
                                    <a href="#" class="list-icons-item" data-toggle="dropdown">
                                        <i class="icon-menu9"></i>
                                    </a>

                                    <div class="dropdown-menu ">
                                        <a href="{{route('teacher.show',$item->id)}}" class="dropdown-item"><i class="icon-file-eye2 mr-3 icon"></i> عرض </a>
                                        <a href="{{route('teacher.edit',$item->id)}}"class="dropdown-item"><i class="icon-pencil7"></i> تعديل </a>

                                        <form action="{{route('teacher.destroy',$item->id)}}" method="POST" >
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
@stop
