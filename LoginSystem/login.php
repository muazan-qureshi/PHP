<?php
    $EMAIL = "muazanqureshi3@gmail.com";
    $PASSWORD = "12101*Mq";

    $uname = $_POST['email'];
    $upass = $_POST['pass'];

    $message = ($uname == $EMAIL && $upass == $PASSWORD) ? "Wellcome" : "Sorry";

    print $message;

    // if($uname == $EMAIL && $upass == $PASSWORD)
    // {
    //     echo "Wellcome";
    // }
    // else
    // {
    //     echo "Sorry Enter Correct Creditentials";
    // }
?>