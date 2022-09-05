@extends('master')

@section('title')
    Add Course Page
@endsection

@section('body')
    <section class="py-5 bg-info">
        <div class="container">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center">Add Course Form</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                        <form action="{{route('course.update', ['id' => $course->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Course Title</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{$course->title}}" class="form-control" name="title">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Teacher Name</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{$course->name}}" class="form-control" name="name">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Course Fee</label>
                                <div class="col-md-9">
                                    <input type="number" value="{{$course->fee}}" class="form-control" name="fee">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Course Duration</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{$course->duration}}" class="form-control" name="duration">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Starting Date</label>
                                <div class="col-md-9">
                                    <input type="date" value="{{$course->date}}" class="form-control" name="date">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Course Objective</label>
                                <div class="col-md-9">
                                    <input type="text" value="{{$course->objective}}" class="form-control" name="objective">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Course Detail</label>
                                <div class="col-md-9">
                                    <textarea name="detail" class="form-control">{{$course->detail}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3">Image</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="image">
                                    <img src="{{asset($course->image)}}" alt="" height="110" width="140">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-outline-success" value="Updated New Info">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

