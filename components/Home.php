<?php

namespace Cleanse\Reverie\Components;

use Cms\Classes\ComponentBase;

class Home extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'            => 'Reverie Home Page',
            'description'     => 'Displays the home page of Team Reverie.'
        ];
    }

    public function onRun()
    {
        $this->addCss('/plugins/cleanse/reverie/assets/css/reverie.css');
    }
}
