@extends ('layouts.apps')

@section('content')

<body>
  <!-- Header  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Hello, </h1>
        <h1>Welcome </h1>

        @auth
        <h1>{{ Auth::user()->name }}</h1>
        @endauth

        <a href="#" type="button" class="cta">Download Resume</a>
      </div>
    </div>
  </section>
  <!-- header  -->


  <!-- Projects Section -->
  <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Recent <span>Projects</span></h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>IoT Pproject</h1>
            <h2>Make a smart dustbin</h2>
            <p>this dustbin can open or close based on censore.</p>
          </div>
          <div class="project-img">
            <img src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>AI Project</h1>
            <h2>Help in data labelling</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
          <div class="project-img">
            <img src="https://images.unsplash.com/photo-1515378791036-0648a3ef77b2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>IoT Project</h1>
            <h2>Smart Lamp</h2>
            <p>This lamp can be turned-on and turned-off bye phone</p>
          </div>
          <div class="project-img">
            <img src="https://images.unsplash.com/photo-1513506003901-1e6a229e2d15?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8bGFtcHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Project 4</h1>
            <h2>Books</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
          </div>
          <div class="project-img">
            <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Ym9va3N8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Project 5</h1>
            <h2>Work</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. </p>
          </div>
          <div class="project-img">
            <img src="https://images.unsplash.com/photo-1657664066042-c59e5f84b7a8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxzZWFyY2h8MXx8d29ya3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Projects Section -->

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
        <p>Student of Gadjah Mada University of Software Engineering Major. have experienced in working with python and front-end programming and also developed excellent time-management skills, detail oriented and can work well under pressure.</p>
        <a href="/send-email" class="cta">SEND EMAIL</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->



@endsection