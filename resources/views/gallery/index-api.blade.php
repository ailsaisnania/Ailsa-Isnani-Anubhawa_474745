@extends('layouts.apps')

@section('content')
<style type="text.css">
    .pagination li {
        float: left;
        list-style-type: none;
        margin: 5px;
    }
</style>

<!-- content wrapper -->
            <div class="row">
                <div class="col-12">
                    <div class="card card-success">
                        <div class = "card-header">
                            <h4 class = "card-title">Gallery (Consuming API)</h4>
                        </div>
                        <div class = "card-body">
                            <div class = "row">
                                <div class = "col-sm-2">
                                    <div id='gallery-api'>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
<!-- /.content wrapper -->