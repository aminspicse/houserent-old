<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class GetData extends Model
{
    use HasFactory;

    public static function active_country(){
        return DB::table('apps_country')->get();
    }
    public static function active_division(){
        return DB::table('apps_division')->get();
    }
}
