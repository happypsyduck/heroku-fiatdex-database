<?php
date_default_timezone_set("UTC");
$destination_url = "http://happypsyduck.mywebcommunity.org/interface/";
if(isset($_GET["request"])){
	header("Content-Type: application/javascript"); //Force browser to see it as Javascript
  $query = $_SERVER['QUERY_STRING'];
  echo $query;
}else{
  echo "This FiatDex database must be queried by JSONP";
}

?>
