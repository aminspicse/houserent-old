<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Auth;
class Action extends Model
{
    use HasFactory;

    /*

    */
    public static function changeStatus($table,$whereName,$whereValue,$statusColumn){
        $status = DB::table($table)->where($whereName,'=',$whereValue)->first();
        //return $status->division_name;
        if($status->division_status == 1)
        {
            DB::table($table)->where($whereName,'=', $whereValue)
                    ->limit(1)
                    ->update(array($statusColumn => 0));
                    return '0'.$status->division_name;
        }else{
            DB::table($table)->where($whereName,'=', $whereValue)
                    ->limit(1)
                    ->update(array($statusColumn => 1));
                    return '1'.$status->division_name;
        }
        
    }
}
