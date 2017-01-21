<?php
    if(isset($_POST["submit"]))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $myEmail = "rich.canadajr@gmail.com";
        $from = "Portfolio Form";
        $subject = "Portfolio Message";
        $body = "Message received from:\n$name\n$email\n\n$message";
        if(mail($myEmail, $subject, $message, $from))
        {

        }
        else
        {
            echo("Failed to send mail mail function failed");
        }
    }
    else{
        echo("Failed to send mail: submit not set");
    }
?>