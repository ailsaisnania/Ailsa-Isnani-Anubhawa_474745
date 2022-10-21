@extends('layouts.apps')

@section('content')
<section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">See<span>More</span>Detail</h1>
      </div>
      <div class="all-projects">
            <h1>{{$projects->title}}</h1>
            <h3>{{$projects->subtitle}}</h3>
            <p>{{$projects-> description}}</p>
    </div>
    <input type="hidden" class="delete_id"  name="id" value="{{ $projects->id }}">
    <a href="/projects/{{$projects->id}}/edit" class="btn btn-primary">Edit</a>
    <br>

    <form action="{{ route('projects.destroy',
    $projects->id) }}" method="POST">
    @method('DELETE')
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{
    $projects->id }}"> 
    <button type="submit" class="btn
    btn-danger">Delete</button>

    <input type="hidden" name="id" value="{{$projects->id }}"> <br></br>
    <a href="/projects/hapus/{{$projects->id}}" onclick="return confirm('are you sure to delete this project?');" class="btn btn-danger btn-sm">Delete</a>
    </form>

</section>
@endsection