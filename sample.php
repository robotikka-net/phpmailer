<?php 

include 'mail.php';
include 'include/clientmail.php';

$cont = infomail('Udara','Notification','Welcome you to ccms','https://robotikka.net','Client Area');

$result=smtpmailer('test-zm7dud8ky@srv1.mail-tester.com','Udara','CCMS Notification',$cont);
echo $result;

?>