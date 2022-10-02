@extends('layouts.apps')

@section('content')

<section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">See<span>More</span>Detail</h1>
      </div>
      <div class="all-projects">
            <h1>{{$edus->school}}</h1>
            <h3>{{$edus->major}}</h3>
            <p>{{$edus->year}}</p>
    </div>
</div>
</section>
@endsection