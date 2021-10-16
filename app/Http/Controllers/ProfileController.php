<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProfilePicture;
use App\Models\User;
use Auth;
use DB;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view()
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.change-profile-pic');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filename = $request->profilepicture->store('public/image');
        $imagelink = substr($filename, 12);

        return ProfilePicture::create([
            'user_id' => Auth::user()->id,
            'picture' => 'imagelink'
        ]);
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
    public function update(Request $request)
    {
        $data = User::find(Auth::user()->id);

        if(!empty($request->profilepicture)){
            $filename = $request->profilepicture->store('public/image');
            $imagelink = substr($filename, 12);
        }else{
            $imagelink = Auth::user()->picture;
        }
        
        if(!empty($request->name)){
            $name = $request->name;
        }else{
            $name = Auth::user()->name;
        }
        

        
        $data->picture = $imagelink;
        $data->name = $name;
        $data->save();


        return redirect('/change-profile');
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
