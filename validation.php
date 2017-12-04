<?php
 header('Content-Type: text/html;charset=UTF-8');


    $to = 'adressedelacodeac';
    $name = $_POST['name'];
    $firstname = $_POST['firstname'];
    $mail = $POST['mail'];
    $school = $POST['école'];
    $subject = $POST['sujet'];
    $headers = 'From: ?' . "\r\n" .
     'Reply-To: ?' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $name, $firstname, $mail, $school, $subject, $headers);
 echo "Votre message à bien été envoyé.";
header('Location: index.php');

?>