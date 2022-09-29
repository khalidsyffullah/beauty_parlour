@extends('admin.layouts.master')
@section('title')
Home
@endsection

@section('content')

<div class="box">
    <div class="secodarybox">
        
        <div class="card-body banner-upload-form">
        @if(session('status'))
        <h6 class="alert alert-success">{{session('status')}}</h6>
        @endif
        @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form action="{{route('bannerstore')}}" method="POST" enctype= "multipart/form-data">
            @csrf

            <div class="form-group mb-3">
                <label for="">Image Name</label>
                <input type="text" name="name" class="form-control" required autocomplete>
            </div>
            <div class="form-group mb-3">
                <label for="">Tilte</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Short Description</label>
                <input type="text" name="short_description" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Alt Text</label>
                <input type="text" name="alt_text" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Upload Now</button>

</form>
        </div>
        
    </div>
</div>

@endsection
