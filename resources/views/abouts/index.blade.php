@extends ('layouts.apps')

@section('content')

  <!-- About Section -->
  <section id="about">

    <div class="about container">
      <div class="col-left">

        <div class="about-img">
          <img src="https://images.unsplash.com/photo-1501644898242-cfea317d7faf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzB8fHdvbWFufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="img">
        </div>
      </div>
      <div class="col-right">
      @if (\Session::has('success'))
      <div class="alert alert-success">
        {!! \Session::get('success')!!}
      </div>
      @endif
        <h1 class="section-title">About Me</h1>
        <p>{{$abouts[0]->desc}}</a> </p>
        <input type="hidden" class="delete_id"  name="id" value="{{ $abouts[0]->id }}">
        <a href="/about/{{$abouts[0]->id}}/edit" class="btn btn-primary">Edit</a>
    <br>
        
        <br>
        <a href="#" class="cta">Download Resume</a>
      </div>
    </div>
</div>
  </section>
  <!-- End About Section -->

@endsection