@extends ('layouts.apps')

 
@section('content')
 <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      @if (\Session::has('success'))
      <div class="alert alert-success">
        {!! \Session::get('success')!!}
      </div>
      @endif

      <div class="projects-header">
        <h1 class="section-title">Recent <span>Projects</span></h1>
      </div>
      <div class="all-projects">
  
       
        @if(count($projects)>0)
            @foreach($projects as $project)
        <div class="project-item">
          <div class="project-info">
            <h1><a href="/projects/{{$project->id}}">{{$project->title}}</a></h1>
            <h2>{{$project->subtitle}}</a></h2>
            <p>{{$project->description}}</a></p>
          </div>
          <div class="project-img">
            <img src="https://images.unsplash.com/photo-1558346490-a72e53ae2d4f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="img">
          </div>
        </div>
        @endforeach
          @else
          <h3>Tidak ada data</h3>
      </div>
      @endif
      <br/>Page : {{ $projects->currentPage() }} <br />
      shown : {{ $projects->perPage() }} <br />
from: {{ $projects->total() }} <br />

<div class="d-flex">
{{ $projects->links() }}
    </div>
    <a href="{{ route('projects.create') }}" class="cta">Create New Post</a>

  </section>
  <!-- End Projects Section -->

@endsection
