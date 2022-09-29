@extends('admin.layouts.master')
@section('title')
Home
@endsection

@section('content')
<div class="row">
    <h1 class="text-center"> Banners</h1>
</div>
<hr>






<div class="float-end banner-add-button banner-add-button">
    <a href="{{route('bannercreate')}}" class="add-banner-button">
        <span class="btn-text">
            Add new Banner
        </span>


    </a>
</div>
<br>



<div class="tablebox">

    <div class="tablesecodarybox">


        <table class="table table-bordered table-striped banner-table table-hover">
            <thead>
                <th class="text-center">Id</th>
                <th class="text-center">name</th>
                <th>image</th>
                <th class="text-center">Short Description</th>
                <th class="text-center">Alter Text</th>
                <th class="text-center">Action</th>
            </thead>
            <tbody>
                @foreach($banners as $item)
                <tr>
                    <td class="text-center">{{$item->id}}</td>
                    <td class="text-center">{{$item->name}}</td>
                    <td>
                        <div class="d-flex justify-content-center"><img src="{{asset('images/banners/'.$item->image)}}"
                                hight="100px" width="100px" alt="{{$item->alt_text}}"></div>
                    </td>
                    <td class="text-center">{{$item->short_description}}</td>
                    <td class="text-center">{{$item->alt_text}}</td>
                    <td class="text-center">
                        <a href="{{route('banneredit',[$item->id])}}" class="btn btn-primary">Edit</a>
                        <a href="{{route('bannerdelete',[$item->id])}}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="error">
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

</div>

</div>



@endsection
