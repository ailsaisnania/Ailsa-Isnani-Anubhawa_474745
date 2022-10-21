
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


<div class="jumbotron jumbotron-fluid">
  <div class="container">
    
@auth
 <p align="center">Hello, <b>{{ Auth::user()->name }}</b><br> do you want to edit your projects?</p>
 @endauth
    <h1 class="display-4">Make changes</h1>
    <form action="{{ route('about.update', $abouts->id) }}" method="POST" enctype="multipart/form-data"> @method('PUT')
{{ csrf_field()}}

<div class="form-group">
            <label for="desc">description</label>
            <textarea class="form-control" id="desc" row="5" name="desc" >{{$abouts->desc}}</textarea>
</div>
<input type="hidden" name="id" value="{{ $abouts->id }}">
<button type="submit" class="btn btn-primary">Submit</button>
<a href="/about" class="btn btn-primary">Back</a>

</form>
</div>
</div>
