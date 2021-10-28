@extends('layouts.layout')

@section('title')
    Inactivated Post
@endsection
@section('content_title')
<h2>Inactivated Post</h2>
<ul class="nav navbar-right panel_toolbox">
    
</ul>
@endsection
@section('content')

@include('flash-message')
<table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" style="width: 100%;" role="grid" aria-describedby="datatable-buttons_info">
    <thead>
        <tr>
            <th>SL</th>
            <th>ID</th>
            <th>Title</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $i=1;?>
        @foreach($post as $post)
            <th>{{$i}}</th>
            <th>{{$post->post_id}}</th>
            <th>{{$post->title}}</th>
            <th>{{$post->address}}</th>
            <th>
               <a href="{{url('admin/view-post').'/'.$post->post_id}}" >View</a>
               <a href="{{url('admin/change-status').'/'.$post->post_id}}/1">Active</a>
               <a href="{{url('admin/change-status').'/'.$post->post_id}}/2">Pending</a>
            </th>
        @endforeach
    </tbody>
</table>
@endsection