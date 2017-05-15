@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Image</h1>

    <form action="{{ route('imageUpload') }}" enctype="multipart/form-data" method="POST">

        <div class="alert alert-danger print-error-msg" style="display:none">
            <ul></ul>
        </div>
        <div class="print-img" style="display:none">
            <img src="" style="height:300px;width:500px">
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="form-group">
            <label>Title:</label>
            <input type="text" name="title" class="form-control" placeholder="Add Title">
        </div>

        <div class="form-group">
            <label>Image:</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="form-group">
            <button class="btn btn-success upload-image" type="submit">Upload Image</button>
        </div>

    </form>

</div>

@endsection