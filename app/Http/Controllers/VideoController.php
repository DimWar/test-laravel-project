<?php
namespace App\Http\Controllers ;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoryVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use App\Models\category;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use PHPUnit\Framework\Attributes\IgnoreFunctionForCodeCoverage;

class VideoController extends Controller{
    public function index(){
        // $videos = Video::all() ;
        // dd($videos) ;
        view('index') ;
    }

    public function create(){
        $categories = category::all() ;
        return view('videos.create' , compact('categories')) ;
    }

    public function store(StoryVideoRequest $request){        
        Video::create($request->all()) ;
        return redirect()->route('index')->with('alert',__('messages.success')) ;
    }
    public function show(Request $request , Video $video){
        return view('videos.show', compact('video')) ;
    }
    
    public function edit(Video $video){
        $categories = category::all() ;
        return view('videos.edit' , compact('video','categories')) ;
    }
    public function edited(UpdateVideoRequest $request , Video $video){
        $video->update($request->all()) ;
        return redirect()->route('index')->with('alert' , __('messages.video_edietd')) ;
    }
    
}