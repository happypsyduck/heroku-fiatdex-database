<?php
date_default_timezone_set("UTC");
$destination_url = "http://happypsyduck.mywebcommunity.org/interface/"; // The absolute URL this file is going to

if(isset($_GET["request"])){
		
	$query = $_SERVER['QUERY_STRING'];
	// Get cURL resource
	$curl = curl_init();
	// Set some options - we are passing in a useragent too here
	curl_setopt_array($curl, [
		CURLOPT_RETURNTRANSFER => 1,
		CURLOPT_URL => $destination_url.'?'.$query,
		CURLOPT_USERAGENT => 'FiatDex User'
	]);
	// Send the request & save response to $resp
	$resp = curl_exec($curl);
	// Close request to clear up some resources
	curl_close($curl);
	
	header("Content-Type: application/javascript"); //Force browser to see it as Javascript
	echo $resp;
}else{
  echo "This FiatDex proxy must be queried by JSONP";
}

?>
