<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class GetData extends Model
{
    use HasFactory;

    public static function allCountry(){
        return DB::table('apps_country')
             ->orderBy('country_status','DESC')
             ->orderBy('country_name','ASC')
             ->get();
    }
     /*
        users of activatedCountry()
        Class Name: AppsDivisionController::create()
    */
    public static function activatedCountry(){
        return DB::table('apps_country')
             ->where('country_status',1)
             ->orderBy('country_name','ASC')
             ->get();
    }

    public static function getCountry($id){
        return DB::table('apps_country as c')
            ->leftJoin('mst_status as s', 'c.country_status', '=','s.status_id')
             ->where('c.country_id',$id)
             ->select('c.*','s.*')
             ->first();
    }

    public static function allDivision(){
        return DB::table('apps_division as d')
        ->leftJoin('apps_country as c', 'd.country_id', '=', 'c.country_id')
        ->select('d.*','c.country_name') 
        ->orderBy('d.division_status','DESC')
        ->orderBy('c.country_name','ASC')
        ->orderBy('d.division_name','ASC')
        ->get();
    }
    public static function getDivision($id){
        return DB::table('apps_division as d')
            ->leftJoin('apps_country as c', 'd.country_id', '=', 'c.country_id')
            ->leftJoin('mst_status as s', 'd.division_status', '=', 's.status_id')
            ->select('d.*','c.*','s.*')
            ->where('division_id','=',$id)
            ->first();
    }

    /*
    users of division_dependent($country)
    Class Name: AppsData
    */
    public static function dependentDivision($country){
        return DB::table('apps_division as d')
        ->where([['d.division_status', '=',1],['country_id','=',$country]])
        ->get();
    }

    public static function getStatus(){
        return DB::table('mst_status')->get();
    }

    public static function fetchById($table,$column,$id){
        return DB::table($table)
            ->where($column,'=',$id)
            ->first();
    }
}
