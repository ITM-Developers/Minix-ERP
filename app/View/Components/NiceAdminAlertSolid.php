<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NiceAdminAlertSolid extends Component
{
    public String $type;
    public String $message;

    public function __construct(String $type, String $message)
    {
        $this->type = $type;
        $this->message = $message;
    }

    public function render()
    {
        return view('components.nice-admin-alert-solid');
    }
}
