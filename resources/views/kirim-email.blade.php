@extends('layouts.apps')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-4 p-4">

        <form action="{{ route('post-email') }}" method="POST">
{{ csrf_field()}}

        <div>
        {{--send email--}}
        @if (session('status'))
        <div class="alert alert-primary" role="alert">
            {{session ('status')}}
        </div>
        @endif
        </div>

        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="nama">
        </div>
        <div class="form-group">
            <label for="email">Email tujuan</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="email tujuan">
        </div>
        <div class="form-group my-3">
            <label for="name">Body Deskripsi</label>
            <textarea type="text" class="form-control" id="" name="body" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group"align="center">
            <button class="btn btn-primary"> kirim email </button>
        <br>
        <br>
        <br>
        <br>
        <br>


@endsection