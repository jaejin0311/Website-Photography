<?php

if (isset($_POST['submit'])) {
    $name = $_POST['Your name'];
    $subject = $_POST['subject'];
    $m = $_POST['mail'];
    $name = $_POST['message'];

    $mailTo = "imanimichelle123@gmail.com";
    $headers = "From: " .$mailfrom;
    $txt = "You have recieved an e-mail from " .$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");

}