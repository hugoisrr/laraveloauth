@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Courses</h1>
        @if(count($courses) > 0)
            @foreach($courses as $course)
                <div class="card card-body bg-light my-4">
                    <h3>{{$course->title}}</h3>
                </div>
            @endforeach
        @else
            <p>No courses found!</p>
        @endif
    </div>
@endsection
