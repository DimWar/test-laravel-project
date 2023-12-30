<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryVideoController extends Controller
{
    public function index(category $category){
        $videos = $category->videos()->paginate() ;
        $title = $category->category ;
        // dd($videos) ;
        return view('videos.index' , compact('videos' , 'title')) ;
    }
}
