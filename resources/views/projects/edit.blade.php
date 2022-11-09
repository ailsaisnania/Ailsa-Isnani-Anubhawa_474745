
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<head>

 <title>{{ config('app.name') }}</title>
</head>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@auth
 <p align="center">Hello, <b>{{ Auth::user()->name }}</b><br> do you want to edit your projects?</p>
 @endauth
 
    <h1 class="display-4">Edit This Project</h1>
    <form action="{{ route('projects.update', $projects->id) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
{{ csrf_field()}}
<div class="form-group">
    <div>      
        <img src="{{asset('storage/projects_image/'.$projects->picture)}}" alt="no image" style="width:50%; height:50%">
    </div>
    <input type="file" class="form-control" accept="projects_image/*" name="picture">
</div>

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" value="{{ $projects->title }}">
            @error('title')
            <div class="text-danger">* {{ $message }}</div>
            @enderror
        </div>

<div class="form-group">
            <label for="subtitle">subtitle</label>
            <textarea class="form-control" id="subtitle" row="5" name="subtitle" value="{{ old($projects->subtitle) }}">{{ $projects->subtitle }}</textarea>
            @error('subtitle')
            <div class="text-danger">* {{ $message }}</div>
            @enderror
        </div>
<div class="form-group">
            <label for="description">description</label>
            <textarea class="form-control" id="description" row="5" name="description" value="{{old ($projects->description)}}">{{$projects->description}}</textarea>
            @error('subtitle')
            <div class="text-danger">* {{ $message }}</div>
            @enderror
        </div>

<input type="hidden" name="id" value="{{ $projects->id }}">
<button type="submit" class="btn btn-primary">Submit</button>
<a href="/projects/{{$projects->id}}" class="btn btn-primary">Back</a>



</form>

