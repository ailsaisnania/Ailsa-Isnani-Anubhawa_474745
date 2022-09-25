@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Add Blogspot</h1>

    <form action="{{ route('posts.store') }}" method="POST">
{{ csrf_field()}}
        
    <break>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="title">
</div>
<div class="form-group">
            <label for="description">description</label>
            <textarea class="form-control" id="description" row="5" name="description"></textarea>
</div>

</break>
<button type="submit" class="btn btn-primary">Submit</button>

</form>

</div>
</div>
@endsection