<?php

    // VARIAVEIS
    
    $to = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $headers = $_POST['headers'];
    
    mail($to,$subject,$message,$headers);
    
    
?>