<?php
namespace Model\Google;
// include your composer dependencies
require_once 'vendor/autoload.php';
//require_once 'vendor/autoloadCarbon.php';
use Google\Client;
use Google\Service\Calendar;
use Google\Service\Calendar\Event;
use Google\Service\Calendar\EventDateTime;
//use Illuminate\Support\Carbon;
use Carbon\Carbon;

class GoogleCalendar
{
	protected $client;
	protected $googleCalendar;
	protected $calendarId;
	    //679183112677-g16a30q2s9l88j3a4i34ls38iae78fb1.apps.googleusercontent.com
	public function __construct()
	{  
	    $this->client = new Client();
	    $this->client->setAuthConfig('./client_secret.json');
	    $this->client->addScope(Calendar::CALENDAR_EVENTS);
	    $this->googleCalendar = new Calendar($this->client);
	    $this->calendarId = "4243e0c51c5f32228583bc91ed72ac0976f02ba40888d579b8390bf2f3547b98@group.calendar.google.com";
	    /*
		try {
		} catch (Exception $e) {
		}
		*/
	}

	public function insert()
	{
		
	    $event = new Google_Service_Calendar_Event(array(
				'summary' => '健身',
				'location' => '健身工廠 Fitness Factory 汐止廠',
				'colorId' => 1,
				//'description' => 'A chance to hear more about Google\'s developer products.',
				'start' => array(
					'dateTime' => '2022-10-22T10:00:00',
					'timeZone' => 'Asia/Taipei',
				),
				'end' => array(
					'dateTime' => '2022-10-22T12:00:00',
					'timeZone' => 'Asia/Taipei',
				),
				'reminders' => array(
					'useDefault' => FALSE,
					'overrides' => array(
						//array('method' => 'email', 'minutes' => 24 * 60),
						//array('method' => 'popup', 'minutes' => 10),
				    ),
				),
		));
		$event = $this->googleCalendar->events->insert($this->calendarId, $event);
		printf('Event created: %s\n', $event->htmlLink);
	}

	public function list()
	{
	    $response = $this->googleCalendar->events->listEvents(
	        $this->calendarId,
	        [
	            'orderBy' => 'startTime',
	            'singleEvents' => true,
	            'timeMin' => Carbon::now('Asia/Taipei')->toRfc3339String(),
	            'timeMax' => Carbon::today('Asia/Taipei')->addWeek(4)->toRfc3339String()
	        ]
	    );

	    $collection = collect($response->getItems());

	    return $collection->map(function ($item) {
	        return [
	            'id' => $item->id,
	            'summary' => $item->summary,
	            //'start' => $item->getStart()->getDateTime(),
	            //'end' => $item->getEnd()->getDateTime(),
	            'start' => $item->getStart()->getDate()?:$item->getStart()->getDateTime(),
	            'end' => $item->getEnd()->getDateTime() ?: "",
	            'location' => $item->location?:"",
	            //'extra' => $item,
	        ];
	    });
	}

}

//$simple = new GoogleCalendar(); //這一行建立物件





?>