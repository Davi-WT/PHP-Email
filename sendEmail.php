<?php

    // VARIAVEIS
    
    $to = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = $_POST['headers'];
    
    mail($to,$subject,$message,$headers);
    
    echo('<h1>ENVIADO</h1>');
    
?>