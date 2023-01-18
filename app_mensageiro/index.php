<?php

use App\Email;
use App\Mensageiro;
use App\Sms;

require __DIR__ . "/vendor/autoload.php";
/*
// --- canal email
$msg = new Mensageiro();
$msg->setCanal('email');
$msg->enviarToken();

echo "<br>";

// --- canal sms
$msg2 = new Mensageiro();
$msg2->setCanal('sms');
$msg2->enviarToken();
*/

// --- canal email
$msg = new Mensageiro(new Email());
$msg->enviarToken();

echo "<br>";

// --- canal sms
$msg2 = new Mensageiro(new Sms());
$msg2->enviarToken();