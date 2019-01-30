<?php

namespace Cleanse\Reverie\Components;

use Exception;
use Flash;
use Mail;
use Redirect;
use Session;
use Cms\Classes\ComponentBase;

class Contact extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'            => 'Reverie Contact Form',
            'description'     => 'Displays the contact page of Team Reverie.'
        ];
    }

    public function defineProperties()
    {
        return [
            'contactEmail' => [
                'title'       => 'Email Address',
                'description' => 'The email address of who manages Team Reverie contact data.',
                'default'     => '',
                'type'        => 'string'
            ],
            'contactName' => [
                'title'       => 'Contact Name',
                'description' => 'The email address of who manages Team Reverie contact data.',
                'default'     => '',
                'type'        => 'string'
            ]
        ];
    }

    public function onRun()
    {
        $this->addCss('/plugins/cleanse/reverie/assets/css/reverie.css');
    }

    public function onContactReverie()
    {
        if (strlen($this->property('contactEmail')) === 0) {
            Flash::error('Contact form not setup by admin. Sorry, try again later.');
            return Redirect::to('/reverie/contact');
        }

        //Bot Detection(?), still work in 2019??!
        $honeypot = post('agree');

        if ($honeypot) {
            return Redirect::to('/reverie'); //Return bot back home.
        }

        if (empty(post('name')) || empty(post('email')) || empty(post('message'))) {
            Flash::error('Please fill in the form in its entirety.');

            return Redirect::to('/reverie/contact')->withInput();
        }

        $data = [
            'contact'   => $this->property('contactName') ?: 'Team Reverie',
            'name'      => post('name'),
            'email'     => post('email'),
            'msg'       => post('message')
        ];

        try {
            Mail::send('cleanse.reverie::mail.contact', $data, function($message) {
                $message->to($this->property('contactEmail'), $this->property('contactName'));
            });

            Flash::success('Message was sent to Team Reverie.');
        }
        catch (Exception $ex) {
            Flash::error($ex->getMessage());
        }
    }
}
