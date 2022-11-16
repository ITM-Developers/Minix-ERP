<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NiceAdminAccordion extends Component
{
    public $ID;
    public $table;

    public function __construct($table)
    {
        $this->table = $table;
        $this->ID = $this->getRandomString();
    }

    public function getRandomString($length = 10)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function render()
    {
        return view('components.nice-admin-accordion');
    }
}
