<?php

namespace App\View\Components\niceadmin;

use Illuminate\View\Component;

class breadcrumb extends Component
{
    public $links;
    public $title;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $links)
    {
        $this->title = $title;
        $this->links = $links;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.niceadmin.breadcrumb');
    }
}
