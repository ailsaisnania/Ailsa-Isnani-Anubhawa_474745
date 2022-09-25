@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Add New Educational Background</h1>
    <form action="{{ route('edus.store') }}" method="POST">
{{ csrf_field()}}

        <div class="form-group">
            <label for="title">school</label>
            <input type="text" class="form-control" id="title" aria-describedby="emailHelp" name="school">
</div>

<div class="form-group">
            <label for="major">major</label>
            <textarea class="form-control" id="subtitle" row="5" name="major"></textarea>
</div>
<div class="form-group">
            <label for="year">year</label>
            <textarea class="form-control" id="description" row="5" name="year"></textarea>
</div>
<button type="submit" class="btn btn-primary">Submit</button>

</form>
</div>
</div>
@endsection