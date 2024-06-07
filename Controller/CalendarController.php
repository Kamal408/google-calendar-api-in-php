<?php

namespace Controller;

class CalendarController extends BaseController
{

	function __construct()
	{
		if (empty($_SESSION['auth_credentials'])) {
			$this->redirect(URL . 'login');
		}
	}

	public function index()
	{
		global $google;
		$eventLists = $google->getCalendarList();
		include($this->viewFolder . "/main.php");
	}

	public function addEvent()
	{
		include($this->viewFolder . "/add_event.php");
	}

	public function insertEvent()
	{
		global $google;

		$data = [
            'summary' => $_POST['summary'],
            'description' => $_POST['description'],
		];

		$data['start'] =  [
			//'dateTime' => '2024-06-07T09:00:00-07:00',
			'dateTime' => date(DATE_RFC3339, strtotime($_POST["startDate"]." ".$_POST["startTime"]))
		];

		$data['end'] =  [
			//'dateTime' => '2024-06-07T09:00:00-07:00',
			'dateTime' => date(DATE_RFC3339, strtotime($_POST["endDate"]." ".$_POST["endTime"]))
		];

		if(!empty($_POST["attendees"])){
			$attendiesArray = explode(",", $_POST["attendees"]);

			$data['attendees'] = array_map(fn($value): array => ['email' => $value], $attendiesArray);
		}

// echo "<pre>";
// print_r($data);
// echo "</pre>";
		$google->addEvent($data);
		$this->redirect(URL);
	}

	public function confirmDeleteEvent($eventId)
	{
		global $google;
		$event = $google->getEvent($eventId);
		//print_r($event);
		include($this->viewFolder . "/delete_event.php");
	}

	public function deleteEvent()
	{
		global $google;
		$google->deleteEvent($_POST['eventId']);
		$this->redirect(URL);
	} 
}
