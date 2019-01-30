<?php

namespace Cleanse\Reverie;

use System\Classes\PluginBase;

/**
 * Reverie Team Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Team Reverie',
            'description' => 'Adds the Team Reverie content to website.',
            'author'      => 'Paul Lovato',
            'icon'        => 'icon-video-camera'
        ];
    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'Cleanse\Reverie\Components\Home' => 'cleanseReverieHome',
            'Cleanse\Reverie\Components\Roster' => 'cleanseReverieRoster',
            'Cleanse\Reverie\Components\Contact' => 'cleanseReverieContact',
            'Cleanse\Reverie\Components\Apply' => 'cleanseReverieApply',
            'Cleanse\Reverie\Components\Thanks' => 'cleanseReverieThanks'
        ];
    }
}
