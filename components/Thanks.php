<?php

namespace Cleanse\Reverie\Components;

use Cms\Classes\ComponentBase;

class Thanks extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'            => 'Reverie Thanks Page',
            'description'     => 'Displays the thank you page of Team Reverie.'
        ];
    }

    public function onRun()
    {
        $this->addCss('/plugins/cleanse/reverie/assets/css/reverie.css');
    }
}
