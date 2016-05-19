<!--
Programmed by Camran on May 16th, 2016
For NORFLEET, social media for professionals
Full team: Charlie, Campbell, Camran and John
Object of code: Working on using an API to get weather on the wedsite (not sure if this is fully implemented yet)
*please note* Any code that is commented out is things that we either: #1 not working properly, #2 features we would like to implement at a
later time or #3 old outdated code we haven't gotten around to cleaning up yet (we're lazy xD)
-->

<?php
$city="Delhi";
$country="IN"; //Two digit country code
$url="http://api.openweathermap.org/data/2.5/weather?q=".$city.",".$country."&units=metric&cnt=7&lang=en";
$json=file_get_contents($url);
$data=json_decode($json,true);
//Get current Temperature in Celsius
echo $data['main']['temp']."<br>";
//Get weather condition
echo $data['weather'][0]['main']."<br>";
//Get cloud percentage
echo $data['clouds']['all']."<br>";
//Get wind speed
echo $data['wind']['speed']."<br>";
?>
