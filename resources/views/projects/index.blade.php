@extends('layout')

@section('content')

    <h1 class="title"> Projects </h1>
    <div class="container">
        <ul>
        @foreach ($projects as $project)
            <a href="/projects/{{ $project->id }}">
                <li>{{ $project->title }}</li>
            </a>
        @endforeach
        </ul>
    </div>

@endsection
