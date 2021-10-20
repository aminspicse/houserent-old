<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\GetData;
use Redirect,Response;
use Auth;
use DB;
class CreatePost extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['country'] = GetData::activatedCountry();
        //$data['division'] = GetData::active_division();
        return view('admin.create',$data);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filename = $request->photo->store('public/image');
        $imagelink = substr($filename, 12);
        return Post::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'address' => $request->address,
            'area'      => $request->area,
            'nm_bedroom' => $request->nm_bedroom,
            'nm_bathroom' => $request->nm_bathroom,
            'nm_garage'     => $request->nm_garage,
            'details'       => $request->details,
            'image'         => $imagelink,
            'video'         => $request->video
        ]);
        return $request->title;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
