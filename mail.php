<?php 
    $name = $_POST['name']; 
    $email = $_POST['email'];
    $message = $_POST['msg'];

    $to = 'amesarasameer@gmail.com'; 
    
                    
    mail($to,$name,$message);
?>