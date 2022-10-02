@extends ('layouts.apps')

 
@section('content')

<section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Educational Background</h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>Gadjah Mada University</h1>
            <h2>Software Engineering</h2>
            <p>2021-now</p>
          </div>
          <div class="project-img">
            <img src="https://images.unsplash.com/photo-1605580144997-209de1050db5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fGhpZ2hzY2hvb2x8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>SMK Telkom Purwokerto</h1>
            <h2>Computer and Networking</h2>
            <p>2018-2021</p>
          </div>
          <div class="project-img">
          <img src="https://images.unsplash.com/photo-1605580144997-209de1050db5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fGhpZ2hzY2hvb2x8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Unformal Education</h1>
            <h2>lorem ipsum</h2>
            <p>lorem ipsum</p>
          </div>
          <div class="project-img">
          <img src="https://images.unsplash.com/photo-1605580144997-209de1050db5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fGhpZ2hzY2hvb2x8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="img">
          </div>
        </div>
       @if(count($edus)>0)
            @foreach($edus as $edu)
        <div class="project-item">
          <div class="project-info">
            <h1><a href="/edus/{{$edu->id}}">{{$edu->school}}</a></h1>
            <h2>{{$edu->major}}</a></h2>
            <p>{{$edu->year}}</a></p>
          </div>
          <div class="project-img">
          <img src="https://images.unsplash.com/photo-1605580144997-209de1050db5?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fGhpZ2hzY2hvb2x8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="img">
          </div>
        </div>
        @endforeach
          @else
          <h3>Tidak ada data</h3>
      </div>
      @endif
      <br/>Page : {{ $edus->currentPage() }} <br />
      shown : {{ $edus->perPage() }} <br />
from: {{ $edus->total() }} <br />

<div class="d-flex">
{{ $edus->links() }}
    </div>
    <a href="{{ route('edus.create') }}" class="cta">Create New Post</a>

    </div>

    @endsection