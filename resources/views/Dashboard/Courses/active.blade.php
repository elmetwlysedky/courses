
@extends('Dashboard.Layouts.master')

@section('title')
    الكورسات المفعله
@endsection



@section('content')

    <!-- Basic datatable -->
    <div class="card"	>
        <div class="card-header header-elements-inline">
            <h5 class="card-title">جدول الكورسات المفعله</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>


        <table class="table datatable-basic">
            <thead>
            <tr>
                <th>الصورة</th>
                <th> الاسم</th>
                <th> البريد الالكتروني</th>
                <th>مجاني</th>
                <th> المشاهدين</th>
                <th> المدرس</th>
                <th>السعر</th>
                <th class="text-center">مفعل\غير مفعل</th>
            </tr>
            </thead>
            <tbody>
            @isset($course)
                @foreach($course as $item)
                    <tr>
                        @if($item->image != null)
                        <td class="mr-3"><img src="/storage/{{$item ->image}}" class="rounded-circle" width="40" height="40" alt=""></td>
                        @else<td></td>
                        @endif
                        <td>{{$item->title}}</td>
                        <td>{{$item->requirements}}</td>
                        <td>{{$item->free_string}}</td>
                        <td>{{$item->gender}}</td>
                        <td>{{$item->teacher->name}}</td>
                        <td>{{$item->price}}</td>

                            <td>
                                <form action="{{route('course-status' ,$item->id)}}" method="post" id="form-status-{{$item->id}}">
                                    @method('PUT')
                                    @csrf
                                    <select onchange="this.form.submit()" name="active">
                                        <option class="btn-success" value="0"{{$item ->active_string == 0 ? 'desabled selected' : ''}}> Actived</option>
                                        <option class="btn-danger" value="1"{{$item ->active_string == 1 ? 'desabled selected' : ''}}>not Active</option>
                                    </select>
                                </form>
                            </td>

                    </tr>
                @endforeach
            @endisset

            </tbody>
        </table>
    </div>
    <!-- /basic datatable -->



@endsection
