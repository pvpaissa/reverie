<?php

namespace Cleanse\Reverie\Components;

use Cms\Classes\ComponentBase;

class Roster extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'            => 'Reverie Roster Page',
            'description'     => 'Displays the roster of Team Reverie.'
        ];
    }

    public function onRun()
    {
        $this->addCss('/plugins/cleanse/reverie/assets/css/reverie.css');
    }
}
