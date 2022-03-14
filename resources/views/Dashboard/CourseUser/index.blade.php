
@extends('Dashboard.Layouts.master')

@section('title')
    اشتراكات الكورسات
@endsection



@section('content')

    <!-- Basic datatable -->
    <div class="card"	>
        <div class="card-header header-elements-inline">
            <h5 class="card-title">جدول اشتراكات الكورسات </h5>
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
                <th>الصورةالكورس</th>
                <th> اسم الكورس</th>
{{--                <th> المدرب</th>--}}
                <th>مشاهدين الكورس</th>
                <th>سعر الكورس</th>
                <th>اسم الطالب</th>
                <th>   ايميل الطالب</th>
                <th class="text-center">مفعل\غير مفعل</th>
            </tr>
            </thead>
            <tbody>

                @foreach($course as $item)
                        <tr>
                        @if($item->course->image != null)
                            <td class="mr-3"><img src="/storage/{{$item->course->image}}" class="rounded-circle" width="40" height="40" alt=""></td>
                        @else<td></td>
                        @endif
                        <td>{{$item->course->title}}</td>
                        <td>{{$item->course->gender}}</td>
                        <td>{{$item->course->price}}</td>
                        <td>{{$item->user->name}}</td>
                        <td>{{$item->user->email}}</td>

                        <td>

                            <form action="{{route('course-user-status' ,$item->id)}}" method="post" id="form-status-{{$item->id}}">
                                @method('PUT')
                                @csrf
                                <select onchange="this.form.submit()" name="active">
                                    <option class="btn-danger" value="1"{{$item ->active == 0 ? 'desabled selected' : ''}}>not Active</option>
                                    <option class="btn-success" value="0"{{$item ->active == 1 ? 'desabled selected' : ''}}> Actived</option>
                                </select>
                            </form>
                        </td>


                    </tr>


                @endforeach


            </tbody>
        </table>
    </div>
    <!-- /basic datatable -->



@endsection
