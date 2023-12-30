<?php

namespace App\View\Components;

use App\Models\category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class HeaderMenu extends Component
{
    public $categories ;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->categories = category::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.header-menu');
    }
}
