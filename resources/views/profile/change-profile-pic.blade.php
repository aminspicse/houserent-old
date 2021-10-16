@extends('layouts.layout')

@section('content_title')
<h2>Edit Profile Info</h2>
@endsection
@section('content')


<form action="{{url('update-profile/')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Name
            <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input name="name" value="{{Auth::user()->name}}" type="text" class="form-control ">
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Profile Picture
            <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input name="profilepicture" type="file" value="{{Auth::user()->picture}}" class="form-control ">
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">
            <span class="required"></span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input name="submit" type="submit" value="Update" class="btn btn-info ">
        </div>
    </div>
</form>

@endsection