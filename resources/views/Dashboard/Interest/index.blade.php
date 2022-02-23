@extends('Dashboard.Layouts.master')

@section('title')
    Interest
@endsection

@section('content')

    <!-- Basic datatable -->
    <div class="card"	>
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Interest Table</h5>
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
                Create
            </button>
            </a>
        </div>

        <table class="table datatable-basic">
            <thead>
            <tr>
                <th> Name</th>
                <th class="text-center">Actions</th>
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
                                <a href="{{route('interest.edit',$item->id)}}"class="dropdown-item"><i class="icon-pencil7"></i> Edit </a>

                                <form action="{{route('interest.destroy',$item->id)}}" method="POST" >
                                    @csrf
                                    @method('DELETE')

                                    <button class="dropdown-item" type="submit"><i class="icon-bin"> </i>move to trash</button>
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
