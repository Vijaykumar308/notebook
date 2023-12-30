<?php

namespace App\View\Components;

use Illuminate\View\Component;

class noteCard extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title; 
    public $featuredImage;
    public $body;
    public $created;

    public function __construct($title, $featuredImage="http://127.0.0.1:8000/media/default_featured_image.png", $body, $created)
    {
        $this->title = $title;
        $this->body  = $body;
        $this->featuredImage= $featuredImage;
        $this->created = $created;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.note-card');
    }
}
