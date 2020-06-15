<?php

if(isset($_POST['submit'])) {
    $ownername = $_POST['owner name'];
    $dogname = $_POST['dog name'];
    $email = $_POST['email'];
    $number = $_POST['contact number'];
    $groom = $_POST['groom type'];
    $message = $_POST['message'];

    $mailTo = "lauren.jelicich.2@uni.massey.ac.nz";
    $headers = "Grooming Booking From: ".$email;
    $txt = "You have received a grooming booking from ".$ownername.".\n\n";

    mail($mailTo, $headers, $txt, $headers);
    header("Location: index.php?mailsend");
}