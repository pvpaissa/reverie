<?php

namespace Cleanse\Reverie\Components;

use Cms\Classes\ComponentBase;

class Apply extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'            => 'Reverie Application Page',
            'description'     => 'Displays the application information page of Team Reverie.'
        ];
    }

    public function onRun()
    {
        $this->addCss('/plugins/cleanse/reverie/assets/css/reverie.css');
    }
}
