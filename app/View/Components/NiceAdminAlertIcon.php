<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NiceAdminAlertIcon extends Component
{
    public String $type;
    public String $icon;
    public String $message;

    public function __construct(String $type, String $icon, String $message)
    {
        $this->type = $type;
        $this->icon = $icon;
        $this->message = $message;
    }

    public function render()
    {
        return view('components.nice-admin-alert-icon');
    }
}
