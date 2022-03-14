@extends('Dashboard.Layouts.master')

@section('title')
   كل الدروس
@endsection



@section('content')


    <div class="text-center mb-3 py-2">
        <h4 class="font-weight-semibold mb-1">جميع الدروس</h4>
        <span class="text-muted d-block">0000000000000000000000000000000000</span>
    </div>

    <div class="row">
        @foreach($lesson as $course)
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="card-img-actions">
                    <img class="card-img-top img-fluid" src="/storage/{{$course->image}}" style="width:3000px; height:200px" alt="">
                    <div class="card-img-actions-overlay card-img-top">
                        <a href="{{route('lesson.show',$course->id)}}" class="btn btn-outline btn-icon bg-white text-white border-white border-2 rounded-round">
                            <i class="icon-play "></i>
                        </a>
                        <a href="{{route('lesson.edit',$course->id)}}" class="btn btn-outline btn-icon bg-white text-white border-white border-2 ml-2 rounded-round">
                            <i class="icon-pencil7"></i>
                        </a>
                        <a href="" class="btn btn-outline btn-icon bg-white text-white border-white border-2 ml-2 rounded-round">

                            <form action="{{route('course.destroy',$course->id)}}" method="POST" >
                                @csrf
                                @method('DELETE')

                                <button type="submit"><i class="icon-bin"></i></button>
                            </form>
                        </a>


                    </div>
                </div>

                <div class="card-body">
                    <h5 class="card-title">{{$course ->name}}</h5>
                    <p class="card-text">{{$course ->description}}</p>
                </div>

                <div class="card-footer bg-transparent d-flex justify-content-between">
                    <span class="text-muted">{{$course-> created_at->diffForhumans()}}</span>
                    <span>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-full2 font-size-base text-warning-300"></i>
									<i class="icon-star-half font-size-base text-warning-300"></i>
									<span class="text-muted ml-2">(12)</span>
								</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@stop
