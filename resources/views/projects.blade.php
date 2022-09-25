@extends ('layouts.app')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="/style.css">
<head>
 <title>{{ config('app.name') }}</title>
</head>
 
@section('content')
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
@endsection