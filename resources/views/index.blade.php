@extends ('layouts.app')

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
        <h1 class="section-title">About Me</h1>
        <p>Student of Gadjah Mada University of Software Engineering Major.
             have experienced in working with python and front-end programming and also developed excellent 
             time-management skills, detail oriented and can work well under pressure.   
             <a href="/about/edit">Edit</a></p>
     
        
        <br>
        <a href="#" class="cta">Download Resume</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->

@endsection