@extends('layout')

@section('content')
    <section class="hero is-small is-warning is-bold box">
        <div class="hero body">
            <h1 class="title">Edit Project</h1>
        </div>
    </section>

    <form method="POST" action="/projects/{{ $project->id }}">
        @method('PATCH')
        @csrf
        <div class="field">
            <label class="label" for="title">Title</label>

            <div class="control">
                <input type="text" class="input" name="title" placeholder="title" value="{{ $project->title }}">
            </div>
        </div>

        <div class="field">
            <label class="label" for="description"> Description</label>

            <div class="control">
                <textarea name="description" class="textarea">{{ $project->description }} </textarea>
            </div>

        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-primary">Update Project</button>
            </div>
        </div>
    </form>

    @include('errors')

    <form method="POST" action="/projects/{{ $project->id }}">
      @method('DELETE')
      @csrf

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-danger">Delete Project</button>
            </div>
        </div>
    </form>


@endsection
