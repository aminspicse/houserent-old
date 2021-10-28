@extends('layouts.layout')

@section('content_title')
    <h2>New Post</h2>
@endsection
@section('content')


<form action="{{url('post/')}}" method="post" enctype="multipart/form-data" id="demo-form2"
    data-parsley-validate class="form-horizontal form-label-left">
    @csrf
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Title/House Name
            <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input name="title" type="text" value="{{old('title')}}" class="form-control ">
            @error('title')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Country
            <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <select name="country_id" id="country" class="form-control">
                <option>Select Country</option>
                @foreach($country as $cnt)
                <option value="{{$cnt->country_id}}">{{$cnt->country_name}} ({{$cnt->country_code}})</option>
                @endforeach
            </select>
            @error('country_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">State/Division
            <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <select name="division_id" id="state" class="form-control">
                <option>Select State/Division</option>
            </select>
            @error('division_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">District
            <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <select name="district_id" id="district" class="form-control">
                <option>Select District</option>
            </select>
            @error('district_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Thana/Upozila
            <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <select name="upazila_id" id="thana" class="form-control">
                <option>Select Thana/Upazila</option>
            </select>
            @error('upazila_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Union/City
            <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <select name="union_id" id="union" class="form-control">
                <option>Select Union/City</option>
            </select>
            @error('union_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Address <span
                class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="text" name="address" value="{{old('address')}}" class="form-control">
            @error('address')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Area/Yaton</label>
        <div class="col-md-6 col-sm-6 ">
            <input name="area" value="{{old('area')}}" class="form-control" type="text">
            @error('area')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Number of
            Bedroom</label>
        <div class="col-md-6 col-sm-6 ">
            <input name="nm_bedroom" value="{{old('nm_bedroom')}}" class="form-control" type="text">
            @error('nm_bedroom')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Number of Bath
            Room</label>
        <div class="col-md-6 col-sm-6 ">
            <input name="nm_bathroom" value="{{old('nm_bathroom')}}" class="form-control" type="text">
            @error('nm_bathroom')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Number of
            Garage</label>
        <div class="col-md-6 col-sm-6 ">
            <input name="nm_garage" value="{{old('nm_garage')}}" class="form-control" type="text">
            @error('nm_garage')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Property/House Type
          </label>
        <div class="col-md-6 col-sm-6 ">
        <select name="property_type" id="" class="form-control">
            <option>Select Property/House Type</option>
            @foreach($propertyType as $ptype)
                <option value="{{$ptype->property_type_id}}">{{$ptype->property_type_name}}</option>
            @endforeach
        </select>   
        @error('property_type')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Advertizement For
          </label>
        <div class="col-md-6 col-sm-6 ">
        <select name="add_for" id="" class="form-control">
            <option>Select Advertizement For</option>
            @foreach($propertyFor as $pfor)
                <option value="{{$pfor->for_id}}">{{$pfor->for_name}}</option>
            @endforeach
        </select>   
        @error('add_for')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Details</label>
        <div class="col-md-6 col-sm-6 ">
            <input name="details" value="{{old('details')}}" class="form-control" type="text">
            @error('details')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Image</label>
        <div class="col-md-6 col-sm-6 ">
            <input name="photo" value="{{old('photo')}}" class="form-control" type="file">
            @error('photo')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Video</label>
        <div class="col-md-6 col-sm-6 ">
            <input name="video" value="{{old('video')}}" class="form-control" type="text">
        </div>
    </div>

    <div class="ln_solid"></div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-7">
            <button class="btn btn-primary" type="reset">Reset</button>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>

</form>

@endsection