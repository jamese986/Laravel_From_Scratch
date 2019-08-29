@extends('layout')
@section('content')
<div class="container">
<section class="hero is-small is-primary is-bold box">
    <div class="hero body">
      <h1 class="title is-clearfix">Projects</h1>
    </div>
</section>
<div class="row section-padding-medium">
  <div class="box">
    <ul>
      @foreach ($projects as $project)
      <a href="/projects/{{ $project->id }}">
        <li>{{ $project->title }}</li>
      </a>
      @endforeach
    </ul>
  </div>
</div>
</div>
@endsection
