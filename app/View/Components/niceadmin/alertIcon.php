<?php

namespace App\View\Components\niceadmin;

use Illuminate\View\Component;

class alertIcon extends Component
{
    public String $type;
    public String $icon;
    public String $message;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(String $type, String $icon, String $message)
    {
        $this->type = $type;
        $this->icon = $icon;
        $this->message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.niceadmin.alert-icon');
    }
}
