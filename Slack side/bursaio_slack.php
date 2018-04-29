<?php
error_reporting(E_All);
ini_set("display_errors", "on");
require 'vendor/autoload.php';

use Aws\IotDataPlane\IotDataPlaneClient;
$iotClient = new IotDataPlaneClient();
$iotClient.setAWSRegion("ap-southeast-1");
$iotClient.setAWSEndpoint("amazonaws.com");
$iotClient.setAWSDomain("aphpti0fiyatr.iot.ap-southeast-1.amazonaws.com");
$iotClient.setAWSPath("/things/IOTfl2017/shadow");
$iotClient.setAWSKeyID("AKIAI6WQ7UFK4JKZ7YJA");
$iotClient.setAWSSecretKey("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");
echo("Bak bakalım :)");
?>