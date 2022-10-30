<?php

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");
header('Content-Type: application/json; charset=utf-8');

class Student{
    public $slackUsername;
    public $backend;
    public $age;
    public $bio;

    //Methods
    function setAttributes($slackUsername, $backend, $age, $bio){
        $this->slackUsername = $slackUsername;
        $this->backend = $backend;
        $this->age = $age;
        $this->bio = $bio;
    }
}

$data = new Student();
$data->setAttributes("chrisBarbz", true, 26, "An aspiring Software Engineer from Sierra Leone, looking forward to dive deep into the tech world, identify problems and proffer solutions." );

##Return JSON response
$data_encoded = json_encode($data);
echo $data_encoded;
