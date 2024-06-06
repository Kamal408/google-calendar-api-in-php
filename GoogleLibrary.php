<?php
/**
 * Central library to access Google APIs Client Library 
 */

 require_once 'vendor/autoload.php';
 use Google\Service\Calendar;

class GoogleLibrary
{
    public $client;

    function __construct()
    {
        $this->client = new Google\Client();
        $this->client->setAuthConfig('client_secret.json');
        $this->client->addScope(Calendar::CALENDAR);
    }
}
