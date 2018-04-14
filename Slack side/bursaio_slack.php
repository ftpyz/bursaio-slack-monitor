<?php
require 'vendor/autoload.php';



use Aws\IotDataPlane\IotDataPlaneClient;


$iotClient = new IotDataPlaneClient(
	[
    'version'     => 'latest',
    'region'      => 'eu-central-1',
    'endpoint'	  => 'https://a1icxebzeqrctn.iot.eu-central-1.amazonaws.com',
    'credentials' => [
        'key'    => 'AKIAIA62YNKJQMBWHTCQ',
        'secret' => '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',
    ],
]
);

//var_dump($iotClientt);

$result = $iotClient->publish([
    'payload' => json_encode(array('command'=>'basit')),
    'qos' => 1,
    'topic' => 'show', // REQUIRED
]);
/*
$iotClient.setAWSRegion("ap-southeast-1");
iotClientt.setAWSDomain("aphpti0fiyatr.iot.ap-southeast-1.amazonaws.com");
$iotClientt.setAWSPath("/things/IOTfl2017/shadow");
$iotClientt.setAWSKeyID("AKIAI6WQ7UFK4JKZ7YJA");
$iotClientt.setAWSSecretKey("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");*/