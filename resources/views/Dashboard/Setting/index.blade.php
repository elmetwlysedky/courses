@extends('Dashboard.layouts.master')

@section('title')
    الاعدادات
@endsection


@section('content')



    <!-- Content area -->
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">جدول الاعدادات</h5>
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
                <th>العنصر</th>
                <th>القيمه</th>
                <th>النوع</th>
                <th>العمليات</th>
            </tr>
            </thead>
            <div>
                @foreach ($setting as $item )
                    <tr>

                        <td>{{$item->name}}</td>
                        <td>{{Str::limit($item->value, 100, ' ....')}}</td>
                        <td>{{$item->type}}</td>

                        <td>

                                    <a href="{{route('setting.edit',$item->id)}}"><i class="icon-pencil7"></i> Edit </a>

                        </td>
                    </tr>
            @endforeach
            </div>
            </tbody>
        </table>
    </div>
        <!-- /media library -->


        <!-- /content area -->


@endsection





