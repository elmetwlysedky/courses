@extends('Dashboard.Layouts.master')

@section('title')

@endsection


@section('content')


    <div class="col-md">

        <!-- Blog layout #1 with video -->
        <div class="card">
            <div class="card-header">
                <h5 class="card-title font-weight-semibold"><a href="#" class="text-default">{{$course->title}}</a></h5>

                <div class="list-icons">
                    <div class="dropdown">
                        <a href="#" class="list-icons-item" data-toggle="dropdown">
                            <i class="icon-menu9"></i>
                        </a>

                        <div class="dropdown-menu ">
                            <a href="{{route('lesson.create')}}" class="dropdown-item"><i class="icon-plus3"></i> اضافة درس </a>
                            <a href="{{route('course.edit',$course->id)}}"class="dropdown-item"><i class="icon-pencil7"></i> تعديل </a>

                            <form action="{{route('course.destroy',$course->id)}}" method="POST" >
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

                    @if($course->video_intro != null)
                    <video  src="/storage/{{$course->video_intro}}"class="embed-responsive-item" allowfullscreen="" frameborder="0" mozallowfullscreen=""  controls>
                    </video>
                    @else
                    <img src="/storage/{{$course->image}}" class="embed-responsive-item" allowfullscreen="" frameborder="0" mozallowfullscreen="" >
                    @endif
                </div>
                {{$course->description}}
            </div>

            <div class="card-footer bg-transparent d-sm-flex justify-content-sm-between align-items-sm-center border-top-0 pt-0 pb-3">
                <ul class="list-inline list-inline-dotted text-muted mb-3 mb-sm-0">
                    <li class="list-inline-item">By <a href="#" class="text-muted"></a></li>
                    <li class="list-inline-item">{{$course->created_at->diffForhumans()}}</li>
                    <li class="list-inline-item"><a href="#" class="text-muted">12 comments</a></li>
                    <li class="list-inline-item">
                        <a href="#" class="text-muted"><i class="icon-cash3 text-green mr-2"></i> {{$course->price}}</a>

                    </li>

                </ul>

            </div>
        </div>
        <!-- /blog layout #1 with video -->

    </div>


    <div class="mb-3 pt-2">
        <h6 class="mb-0 font-weight-semibold">

        </h6>
        <span class="text-muted d-block">دروس الكورس</span>
    </div>

    <div class="row">
        @foreach($course->lesson as $lesson)
        <div class="col-sm-6 col-xl-3">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1">
                    <div class="card-img embed-responsive embed-responsive-16by9">
                        <iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126945693?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
                        <video allowfullscreen="" frameborder="0" mozallowfullscreen="" src="/storage/{{$lesson->video}}" webkitallowfullscreen="" controls></video>

                    </div>
                </div>

                <div class="card-body">
                    <div class="d-flex align-items-start flex-nowrap">
                        <div>
                            <h6 class="font-weight-semibold mr-2">{{$lesson->name}}</h6>
                            <span>{{$lesson->description}}</span>
                        </div>

                        <div class="list-icons list-icons-extended ml-auto">
{{--                            <a href="#" class="list-icons-item"><i class="icon-download top-0"></i></a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


    </div>



@endsection

