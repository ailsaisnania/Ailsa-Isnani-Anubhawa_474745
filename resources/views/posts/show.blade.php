@extends('layouts.app')
@section('content')
<div class="jumbotron jumbotron-fluid">
  <div class="container">
  <break>
    <h1>{{$posts->title}}</h1>
    <break>
    <small>tanggal: {{$posts->created_at}}</small>
    <p>{{$posts -> description}}</p>

</break>
    <a href="/posts/{{$posts->id}}/edit" class="btn btn-primary">Edit</a>


<form action="{{ route('posts.destroy',
$posts->id) }}" method="POST">
@method('DELETE')
{{ csrf_field() }}
<input type="hidden" name="id" value="{{
$posts->id }}"> <br />
<button type="submit" class="btn
btn-danger">Delete</button>
</break>
</form>
  </div>

</div>
</div>


