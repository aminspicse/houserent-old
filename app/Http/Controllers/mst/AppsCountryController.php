<?php

namespace App\Http\Controllers\mst;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GetData;
use App\Models\mst\AppsCountry;
use DB;

class AppsCountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['country']    =   DB::table('apps_country')->whereIn('country_status', array(0,1))->orderBy('country_name','asc')->get();
        return view('mst.country.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['status'] = GetData::getStatus();
        return view('mst.country.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'country_name' => ['required', 'unique:apps_country'],
            //'body' => ['required'],
        ]);

        return AppsCountry::create([
            'country_name'      => $request->country_name, 
            'country_code'      => $request->country_code, 
            'dial_code'         => $request->dial_code,
            'currency_name'     => $request->currency_name,
            'currency_symbol'   => $request->currency_symbol,
            'currency_code'     => $request->currency_code,
            'country_status'    => $request->country_status
        ]);
        return request('country_name');
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
