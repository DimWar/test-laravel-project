<?php

namespace App\View\Components;

use App\Models\Video;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class videoBox extends Component
{
    public $videos ;
    /**
     * Create a new component instance.
     */
    public function __construct(Video $video)
    {
        $this->videos = $video->findVideos();
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.videoBox');
    }
}
