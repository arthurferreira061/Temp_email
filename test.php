<?php
include 'mail.php';
$tempMail = new TempMail();

// $tempMail->refreshTime();
echo $tempMail->getMail();
echo "\n";
// echo $tempMail->getLastMessage();
// echo "\n";
// echo $tempMail->getNewMail();
// echo $tempMail->getLastMessage();
echo $tempMail->getActivationCode('twitter');