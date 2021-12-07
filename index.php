<?php 
/*
It is a PHP script. Using this script, you can get User Internet connection Information.
Like IP Address, ISP, Country name, District & City etc.

Note: This script will not be working on the localhost.

This Script provided by Durjoysoft.
Email: helpdas@durjoysoft.com
Mobile:  01610728750, 01999737584 (08:00 am to 10:00 pm)
Send a text SMS before making a call.
*/
if (!empty($_SERVER['HTTP_CLIENT_IP'])) { $ip_address = $_SERVER['HTTP_CLIENT_IP']; } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR']; } else { $user_ip = $_SERVER['REMOTE_ADDR']; }

$link1 = "https://api.ipgeolocation.io/ipgeo?apiKey=038933b9d1e74176ba6c610f65af08a6&ip=";
$link2 = "&lang=en&fields=*&excludes=";
$fullipdata = $link1.$user_ip;
$fullipdataa = $fullipdata.$link2;
$getipdata =  file_get_contents ($fullipdataa);
$objipdata = json_decode($getipdata);
echo "IP Address: ".$user_ip."<br>";
$country_name = $objipdata->country_name;
echo "country_name: ".$country_name."<br>";
$district = $objipdata->district;
echo "district: ".$district."<br>";
$city = $objipdata->city;
echo "city: ".$city."<br>";
$isp = $objipdata->isp;
echo "isp: ".$isp."<br>";
$organization = $objipdata->organization;
echo "organization: ".$organization."<br>";
?>