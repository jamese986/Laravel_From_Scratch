@extends('layout')

@section('content')
    <section class="hero is-small is-success is-bold box">
        <div class="hero body">
            <h1 class="title">Create a New Project </h1>
        </div>
    </section>
    <form method="POST" action="/projects">
        @csrf
        <div class="field">
            <label class="label" for="title">Project Title</label>

            <div class="control">
                <input type="text" class="input {{ $errors->has('title') ? 'is-danger' : '' }}" name="title" value="{{ old('title') }}" placeholder="Project title" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Project Description</label>

            <div class="control">
                <textarea class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" name="description" required placeholder="Project Description" >{{ old('description') }} </textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Create Project</button>
            </div>
        </div>

        @include('errors')
    </form>

@endsection
