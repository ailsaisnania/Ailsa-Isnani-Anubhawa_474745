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
        <div>
       
        @if(count($projects)>0)
            @foreach($projects as $project)
        <div class="project-item">
              <div class="project-info">
                <h1><a href="/projects/{{$project->id}}">{{$project->title}}</a></h1>
                <h2>{{$project->subtitle}}</a></h2>
                <p>{{$project->description}}</a></p>
              </div>
          <div class="project-img">
              <img src="{{asset('storage/projects_image/'.$project->picture)}}" alt="no image">
          </div>
        </div>
        @endforeach
          @else
          <h3>Tidak ada data</h3>
      </div>
      @endif
</div>
      <br/>Page : {{ $projects->currentPage() }} <br />
      shown : {{ $projects->perPage() }} <br />
from: {{ $projects->total() }} <br />

<div class="d-flex">
{{ $projects->links() }}
    </div>
    <a href="{{ route('projects.create') }}" class="cta">Create New Post</a>
</div>
  </section>
  <!-- End Projects Section -->


@endsection
