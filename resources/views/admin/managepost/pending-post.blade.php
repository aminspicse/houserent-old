@extends('layouts.layout')

@section('title')
    Pending Post
@endsection
@section('content_title')
<h2>Pending Post</h2>
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
        <tr>
            <th>{{$i}}</th>
            <th>{{$post->post_id}}</th>
            <th><a href="{{url('admin/view-post').'/'.$post->post_id}}">{{$post->title}}</a></th>
            <th>{{$post->address}}</th>
            <th>
               <a href="{{url('admin/change-status').'/'.$post->post_id}}/1" >Active</a>
               <a href="{{url('admin/change-status').'/'.$post->post_id}}/0" >Inactive</a>
            </th>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection