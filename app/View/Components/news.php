<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class news extends Component
{
    public $title;
    public $content;
    public $image;
    /**
     * Create a new component instance.
     */
    public function __construct($title, $content, $image)
    {
        $this->title = $title;
        $this->content = $content;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.news');
    }
}
