@extends('layouts.apps')

@section('content')
<style type="text/css">
    .pagination li {
        float: left;
        list-style-type:none;
        margin = 5px;
    }
</style>


<!-- Main Content -->
<div class = "content">
    <div class = "container">
        <div class = "row">
            <div class = "col-12">
                <div class = "card card-success">
                    <div class = "card-header">
                        <h4 class = "card-title">{{$menu}}</h4>
                    </div>
                    <div class = "card-body">
                        <div class = "row">
                            @if(count($galleries)>0)
                            @foreach ($galleries as $gallery)
                            <div class = "col-sm-2">
                                <div>
                                    <a class = "example-image-link" href = "{{asset('storage/projects_image/'.$gallery->picture)}}"
                                    data-lightbox="example-2" data-title="{{$gallery->description}}" >
                                        <img class = "example-image img-fluid mb-2"
                                        src = "{{asset('storage/projects_image/'.$gallery->picture)}}" alt = "image-1" style="width:300px; height:300px;"/></a>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <h3>Tidak ada data.</h3>
                            @endif

</div>
</div>
</div>
<div class="d-flex" style="justify-content:center">
{{$galleries->links()}}
</div>
</div>
</div>
</div>

@endsection


