@extends('layouts.layout')

@section('content_title')
    <h2>Country List</h2>
@endsection
@section('content')

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">SL</th>
            <th scope="col">Country</th>
            <th scope="col">Country Code</th>
            <th scope="col">Dial Code</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1;?>
        @foreach($country as $country)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$country->country_name}}</td>
            <td>{{$country->country_code}}</td>
            <td>{{$country->dial_code}}</td>
            <td>
                @if($country->country_status == 1)
                <p class="text-primary">Active</p>
                @else
                <p class="text-danger">Inactive</p>
                @endif
            </td>
            <td>
                <a href="" class="btn btn-info fa fa-pencil fa-fw" title="Edit"></a>
                <a href="" class="btn btn-danger fa fa-trash-o fa-fw" title="Delete"></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection