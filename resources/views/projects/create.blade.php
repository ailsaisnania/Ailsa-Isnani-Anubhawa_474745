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
 <p align="center">Welcome, <b>{{ Auth::user()->name }}</b><br> lets add more projects!</p>
 @endauth
    <h1 class="display-4">Add New Project</h1>
    <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
{{ csrf_field()}}

<div class="form-group">
            <label for="input-file">file input</label>
            <div class="input-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="input-file" name="picture">
            <label class="custom-file-label" for="input-file" accept="projects_image/*"> Choose File </label>
</div>
</div>
</div>

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title" label="title">
            @error('title')
            <div class="text-danger">* {{ $message }}</div>
            @enderror
</div>

<div class="form-group">
            <label for="subtitle">subtitle</label>
            <textarea class="form-control" id="subtitle" row="5" name="subtitle"></textarea>
            @error('subtitle')
            <div class="text-danger">* {{ $message }}</div>
            @enderror
</div>
<div class="form-group">
            <label for="description">description</label>
            <textarea class="form-control" id="description" row="5" name="description"></textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
<a href="/projects" class="btn btn-primary">Back</a>

</form>


</div>
</div>
