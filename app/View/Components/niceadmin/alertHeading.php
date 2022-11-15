<?php

namespace App\View\Components\niceadmin;

use Illuminate\View\Component;

class alertHeading extends Component
{
    public String $type;
    public String $message;
    public String $title;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(String $type, String $title, String $message)
    {
        $this->type = $type;
        $this->title = $title;
        $this->message = $message;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.niceadmin.alert-heading');
    }
}
