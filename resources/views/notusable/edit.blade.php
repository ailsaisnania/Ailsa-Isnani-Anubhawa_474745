@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">edit</h1>
    <form action="{{ route('abouts.update') }}" method="POST">
{{ csrf_field()}}



@foreach($abouts as $about)
<div class="form-group">
            <label for="desc">{{ $about->desc }}</label>
            <textarea class="form-control" id="desc" row="5" name="desc"></textarea>
</div>

<button type="submit" class="btn btn-primary">Submit</button>

</form>
@endforeach
</div>
@endsection