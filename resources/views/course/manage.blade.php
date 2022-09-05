@extends('master')

@section('title')
    Manage Course Page
@endsection

@section('body')
    <section class="py-5 bg-info">
        <div class="container">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">All Course Info</div>
                    <div class="card-body">
                        <h4 class="text-center text-success">{{Session::get('message')}}</h4>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Sl No</th>
                                <th>Course Title</th>
                                <th>Teacher Name</th>
                                <th>Course Fee</th>
                                <th>Course Duration</th>
                                <th>Starting Date</th>
                                <th>Course Objective</th>
                                <th>Course Detail</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$course->title}}</td>
                                <td>{{$course->name}}</td>
                                <td>{{$course->fee}}</td>
                                <td>{{$course->duration}}</td>
                                <td>{{$course->date}}</td>
                                <td>{{$course->objective}}</td>
                                <td>{{$course->detail}}</td>
                                <td>
                                    <img src="{{$course->image}}" alt="" height="50" width="70">
                                </td>
                                <td>
                                    <a href="{{route('course.edit', ['id' => $course->id])}}" class="btn btn-success">Edit</a>
                                    <a href="{{route('course.delete', ['id' => $course->id])}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
