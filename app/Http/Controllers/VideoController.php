<?php
namespace App\Http\Controllers ;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoryVideoRequest;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller{
    public function index(){
        // $videos = Video::all() ;
        // dd($videos) ;
        view('index') ;
    }

    public function create(){
        return view('videos.create') ;
    }

    public function store(StoryVideoRequest $request){        
        Video::create($request->all()) ;
        return redirect()->route('index')->with('alert',__('messages.success')) ;
    }
}