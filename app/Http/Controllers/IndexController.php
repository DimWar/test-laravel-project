<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $videos = Video::all() ;
        $totalView = Video::all()->random(3) ;
        $bestView = Video::all()->random(4) ;
        return view('index',compact('videos','totalView','bestView')) ;
    }
}
