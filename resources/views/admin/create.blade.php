@extends('layouts.layout')

@section('content_title')
    <h2>New Post</h2>
@endsection
@section('content')


<form action="{{url('admin/post/store')}}" method="post" enctype="multipart/form-data" id="demo-form2"
    data-parsley-validate class="form-horizontal form-label-left">
    @csrf
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Title/House Name
            <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input name="title" type="text" class="form-control ">
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Country
            <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <select name="" id="country" class="form-control">
                <option>Select Country</option>
                @foreach($country as $cnt)
                <option value="{{$cnt->country_id}}">{{$cnt->country_name}} ({{$cnt->country_code}})</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">State/Division
            <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <select name="" id="state" class="form-control">
                <option>Select State/Division</option>

            </select>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">District
            <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <select name="" id="district" class="form-control">
                <option>Select District</option>

            </select>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Thana/Upozila
            <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <select name="" id="thana" class="form-control">
                <option>Select Thana/Upozila</option>

            </select>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Union/City
            <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <select name="" id="union" class="form-control">
                <option>Select Union/City</option>

            </select>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Address <span
                class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" name="address" class="form-control">
        </div>
    </div>
    <div class="item form-group">
        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Area/Yaton</label>
        <div class="col-md-6 col-sm-6 ">
            <input name="area" class="form-control" type="text">
        </div>
    </div>
    <div class="item form-group">
        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Number of
            Bedroom</label>
        <div class="col-md-6 col-sm-6 ">
            <input name="nm_bedroom" class="form-control" type="text">
        </div>
    </div>
    <div class="item form-group">
        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Number of Bath
            Room</label>
        <div class="col-md-6 col-sm-6 ">
            <input name="nm_bathroom" class="form-control" type="text">
        </div>
    </div>
    <div class="item form-group">
        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Number of
            Garage</label>
        <div class="col-md-6 col-sm-6 ">
            <input name="nm_garage" class="form-control" type="text">
        </div>
    </div>
    <div class="item form-group">
        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Details</label>
        <div class="col-md-6 col-sm-6 ">
            <input name="details" class="form-control" type="text">
        </div>
    </div>
    <div class="item form-group">
        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Image</label>
        <div class="col-md-6 col-sm-6 ">
            <input name="photo" class="form-control" type="file">
        </div>
    </div>
    <div class="item form-group">
        <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Video</label>
        <div class="col-md-6 col-sm-6 ">
            <input name="video" class="form-control" type="text">
        </div>
    </div>

    <div class="ln_solid"></div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
            <button class="btn btn-primary" type="button">Cancel</button>
            <button class="btn btn-primary" type="reset">Reset</button>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>

</form>

@endsection