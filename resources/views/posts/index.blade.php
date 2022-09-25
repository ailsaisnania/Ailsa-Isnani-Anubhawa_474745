@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    @if (\Session::has('success'))
      <div class="alert alert-success">
        {!! \Session::get('success')!!}
      </div>
      @endif
    <h1 class="display-4">Ailsa's</h1>
    <break>
    @if(count($posts)>0)
    <break>
    @foreach($posts as $post)
    <div class="well">
        <h3><a href="/posts/{{$post->id}}">
            {{$post->title}}</a></h3>
        <small>tanggal:
            {{$post->created_at}}> </small>
    </div>
@endforeach
</break>
@else
</break>
<h3>Tidak ada data</h3>
@endif
<break><a href="{{ route('posts.create') }}">Create New Post</a>
</break>
</div>
</div>

