<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['slider'] = DB::table('posts')->orderBy('post_id','desc')->take(5)->get();
        $data['recent'] = DB::table('posts')->orderBy('post_id', 'desc')->take(10)->get();
        $data['recomanded'] = DB::table('posts')->orderBy('post_id', 'desc')->take(4)->get();
        return view('users.home',$data);
    }
}
