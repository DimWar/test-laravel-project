<?php
namespace App\Http\Controllers ;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoryVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use PHPUnit\Framework\Attributes\IgnoreFunctionForCodeCoverage;

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
    public function show(Request $request , Video $video){
        return view('videos.show' , compact('video')) ;
    }
    
    public function edit(Video $video){
        return view('videos.edit' , compact('video')) ;
    }
    public function edited(UpdateVideoRequest $request , Video $video){
        $video->update($request->all()) ;
        return redirect()->route('index')->with('alert' , __('message.video_edietd')) ;
    }
    
}