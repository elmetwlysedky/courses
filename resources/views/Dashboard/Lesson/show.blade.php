@extends('Dashboard.Layouts.master')

@section('title')

@endsection


@section('content')


    <div class="col-md">

        <!-- Blog layout #1 with video -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title font-weight-semibold"><a href="#" class="text-default">{{$lesson->name}}</a></h5>

                <div class="list-icons">
                    <div class="dropdown">
                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                            <i class="icon-menu9"></i>
                        </a>

                        <div class="dropdown-menu ">
                            <a href="{{route('lesson.create')}}" class="dropdown-item"><i class="icon-plus3"></i> اضافة درس </a>
                            <a href="{{route('lesson.edit',$lesson->id)}}"class="dropdown-item"><i class="icon-pencil7"></i> تعديل </a>

                            <form action="{{route('lesson.destroy',$lesson->id)}}" method="POST" >
                                @csrf
                                @method('DELETE')

                                <button class="dropdown-item" type="submit"><i class="icon-bin"> </i>حذف</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="card-img embed-responsive embed-responsive-16by9 mb-3">

                    @if($lesson->video !=null)
                    <video  src="/storage/{{$lesson->video}}"class="embed-responsive-item" allowfullscreen="" frameborder="0" mozallowfullscreen=""  controls>
                    </video>
                    @else
                    <img src="/storage/{{$lesson->image}}" class="embed-responsive-item" allowfullscreen="" frameborder="0" mozallowfullscreen="" >
                    @endif
                </div>
                {{$lesson->description}}
            </div>

            <div class="card-footer bg-transparent d-sm-flex justify-content-sm-between align-items-sm-center border-top-0 pt-0 pb-3">
                <ul class="list-inline list-inline-dotted text-muted mb-3 mb-sm-0">
                    <li class="list-inline-item">By <a href="#" class="text-muted"></a></li>
                    <li class="list-inline-item">{{$lesson->created_at->diffForhumans()}}</li>
                    <li class="list-inline-item"><a href="#" class="text-muted">12 comments</a></li>
                    <li class="list-inline-item">
{{--                        <a href="#" class="text-muted"><i class="icon-cash3 text-green mr-2"></i> {{$lesson->price}}</a>--}}

                    </li>

                </ul>

            </div>
        </div>
        <!-- /blog layout #1 with video -->

    </div>





@endsection

