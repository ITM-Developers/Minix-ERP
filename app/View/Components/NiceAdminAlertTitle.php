<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NiceAdminAlertTitle extends Component
{
    public String $type;
    public String $message;
    public String $title;

    public function __construct(String $type, String $title, String $message)
    {
        $this->type = $type;
        $this->title = $title;
        $this->message = $message;
    }

    public function render()
    {
        return view('components.nice-admin-alert-title');
    }
}
