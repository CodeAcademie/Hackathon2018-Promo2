<?php
 
    $to = 'lise.p.poirier@gmail.com';
    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $mail = $POST['mail'];
$school = $POST['école'];
$subject = $POST['sujet'];
    $headers = 'From: lise.p.poirier@gmail.com' . "\r\n" .
     'Reply-To: lise.p.poirier@gmail.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $name, $firstname, $mail, $school, $subject, $headers);
?>