<?php 
	// Config file for the Gracepoint Riverside Minisite
	
	// DYNAMIC VARIABLES
	// Things that might potentially change from week to week, quarter to quarter
	// =================================================================================

	$UPDATE_MSG = '';		// message will be flashed above every page if this isn't null

	$USE_LOCATION_INDEX = 0;
	$USE_RIDES_ARRAY = array(0, 1, 2, 3);
	$SERVICE_TIME = '1:30pm';
	$RIDES_TIME = '1:00pm';

	$SERVICE_DAY = 7;		// 1 = Monday; 6 = Saturday; 7 = Sunday
	$numdays = $SERVICE_DAY - date('N');	// date('N') is today's weekdate in numbers (1 = Monday, etc)
	if ($numdays < 0) $numdays += 7;
	$NEXTSERVICE_TIMESTAMP = time() + ($numdays * 86400);		// 86400 = seconds in a day

	// GLOBAL VARIABLES
	// Mainly variables used for the header and footer
	// =================================================================================
	
	$TITLE = 'Gracepoint Riverside';
	$DESCRIPTION = 'Gracepoint Riverside Church is a Christian ministry committed to serving the students of University of California, Riverside with biblical teaching, discipleship, and simply growing together. If you need a ride, we provide pickups from the dorms and campus apartments.';
	$KEYWORDS = 'church, ucr, ucr church, ucr church rides, churches near ucr, churches near uc riverside, ucr ride to church church rides, dorm rides, riverside-ca, riverside, university of california riverside, uc riverside, christian, college, young, ministry, christianity, discipleship, biblical teaching, Asian-American church, dorm, pickup, rides, campus';
	$FOOTER = 'This is the footer';
	$CONTENT = array();
	
	// TIME + LOCATION
	// =================================================================================
	
	$LOCATION = array(
		0 => array(
			'name' => 'First Baptist',
			'line1' => '5500 Alessandro Blvd',
			'line2' => 'Riverside, CA 92507',
			'lat' => 33.95167,
			'long' => -117.3584
		),
		1 => array(
			'name' => 'Stratton Community Center',
			'line1' => '2008 Martin Luther King Blvd.',
			'line2' => 'Riverside, CA 92507',
			'lat' => 33.97,
			'long' => -117.3551
		)
	);
	
	$RIDES = array(
		0 => array(
			'location' => 'Aberdeen-Inverness',
			'desc' => 'Main entrance',
			'lat' => 33.97835,
			'long' => -117.32554
		),
		1 => array(
			'location' => 'Lot 15',
			'desc' => 'Between Pentland and the parking lot',
			'lat' => 0,
			'long' => 0
		),
		2 => array(
			'location' => 'University Village',
			'desc' => 'In front of Theatre',
			'lat' => 0,
			'long' => 0
		),
		3 => array(
			'location' => 'Lot 26',
			'desc' => '',
			'lat' => 0,
			'long' => 0
		)
	);


	// RECENT EVENTS
	// =================================================================================

?>
