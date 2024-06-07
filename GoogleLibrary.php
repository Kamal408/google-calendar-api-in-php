<?php

/**
 * Central library to access Google APIs Client Library 
 */

require_once 'vendor/autoload.php';

use Google\Service\Calendar;

class GoogleLibrary
{
    public $client;
    public $calendarId = 'primary';

    function __construct()
    {
        $this->client = new Google\Client();
        $this->client->setAuthConfig('client_secret.json');
        $this->client->addScope(Calendar::CALENDAR);

        if (!empty($_SESSION['auth_credentials'])) {
            $this->client->setAccessToken($_SESSION['auth_credentials']);
            if ($this->client->isAccessTokenExpired()) {
                echo "Session Expired";
                $_SESSION['auth_credentials'] = $this->client->fetchAccessTokenWithRefreshToken();
            }
        }
    }

    public function getCalendarList()
    {
        $service = new Google_Service_Calendar($this->client);
        $parameters = array(
            'maxResults' => 10,
            'orderBy' => 'startTime',
            'singleEvents' => true,
            'timeMin' => date('c'),
        );
        $results = $service->events->listEvents($this->calendarId, $parameters);
        return $results->getItems();
    }

    public function addEvent($data)
    {
        $service = new Google_Service_Calendar($this->client);
        $event = new Google_Service_Calendar_Event($data);
        $service->events->insert($this->calendarId, $event);
    }

    public function deleteEvent($eventId)
    {
        $service = new Google_Service_Calendar($this->client);
        $service->events->delete($this->calendarId, $eventId);
    }

    public function getEvent($eventId)
    {
        $service = new Google_Service_Calendar($this->client);
        return $service->events->get($this->calendarId, $eventId);
    }
}
