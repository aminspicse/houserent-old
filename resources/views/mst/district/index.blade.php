@extends('layouts.layout')
@section('title')
    District
@endsection
@section('content_title')
<h2>District List</h2>
<ul class="nav navbar-right panel_toolbox">
    <a href="{{url('/admin/district/create')}}">Add District</a>
</ul>
@endsection
@section('content')

@include('flash-message')
<table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" style="width: 100%;" role="grid" aria-describedby="datatable-buttons_info">
    <thead>
        <tr>
            <th>SL</th>
            <th>Country</th>
            <th>Division/State </th>
            <th>District </th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1;?>
        @foreach($district as $district)
        <tr>
            <td>{{$i++}}</td>
            <td>{{$district->country_name}}</td>
            <td>{{$district->division_name}}</td>
            <td>{{$district->district_name}}</td>
            <td>
                @if($district->district_status == 1)
                    <form action="{{url('admin/district/')}}/{{$district->district_id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" title="Click for Inactive" class="btn btn-danger ">Inactive</button>
                    </form>
                @else
                    <form action="{{url('admin/district/')}}/{{$district->district_id}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" title="Click for Active" class="btn btn-success ">Active</button>
                    </form>
                @endif
            </td>
            <td>
                <div class="row">
                    <a class="btn" href="{{url('admin/district/')}}/{{$district->district_id}}/edit"><i class="fa fa-edit"></i></a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection