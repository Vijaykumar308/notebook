<?php

namespace App\View\Components;

use Illuminate\View\Component;

class hero extends Component
{
    public $title;
    public $category;
    public $blogDate;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $category="", $blogDate="")
    {
        $this->title = $title;
        $this->category = $category;
        $this->blogDate = $blogDate;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.hero');
    }
}
