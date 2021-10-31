<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\guest\Home;
use App\Models\GetData;
use Auth;
use DB;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Home::TopPost();
        $data['toppost'] = Home::TopPost();//DB::table('posts')->orderBy('post_id','desc')->take(5)->get();
        $data['recent'] = Home::RecentPost();//DB::table('posts')->orderBy('post_id', 'desc')->take(10)->get();
        $data['recomanded'] = Home::RecommendedPost();//DB::table('post_view')->orderBy('post_id', 'desc')->take(4)->get();
        return view('guest.home',$data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['post'] = GetData::getPost($id,1);
        $data['property_type'] = GetData::PropertyType();
        $data['recent'] = $data['recent'] = Home::RecentPost();
        $data['recomanded'] = DB::table('posts')->orderBy('post_id', 'desc')->take(4)->get();
        return view('guest.propertysingle',$data);
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
