@extends('Dashboard.Layouts.master')

@section('title')
    الاهتمامات
@endsection

@section('content')

    <!-- Basic datatable -->
    <div class="card"	>
        <div class="card-header header-elements-inline">
            <h5 class="card-title">جدول الاهتمامات</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <a href="{{route('interest.create')}}">
            <button class="btn bg-teal "><b><i class="icon-plus3"></i></b>
             اضافة اهتمام
            </button>
            </a>
        </div>

        <table class="table datatable-basic">
            <thead>
            <tr>
                <th> الاسم</th>
                <th class="text-center">العمليات</th>
            </tr>
            </thead>
            <tbody>
            @isset($interest)
                @foreach($interest as $item)
            <tr>

                <td>{{$item->name}}</td>
                <td class="text-center">
                    <div class="list-icons">
                        <div class="dropdown">
                            <a href="#" class="list-icons-item" data-toggle="dropdown">
                                <i class="icon-menu9"></i>
                            </a>

                            <div class="dropdown-menu ">
{{--                                <a href="{{route('interest.edit')}}" class="dropdown-item"><i class="icon-file-eye2 mr-3 icon"></i> show </a>--}}
                                <a href="{{route('interest.edit',$item->id)}}"class="dropdown-item"><i class="icon-pencil7"></i> تعديل </a>

                                <form action="{{route('interest.destroy',$item->id)}}" method="POST" >
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



@endsection
