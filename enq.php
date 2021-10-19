<?php
 $useremail = $_POST['email'];
 $username = $_POST['name'];
 $usermobn = $_POST['mobile'];
 $usermessage = $_POST['comment'];

 $to = "megatechengineeringworks@gmail.com";
 $body = "";

 $body .= "From: ".$username. "\r\n";
 $body .= "Email: ".$useremail. "\r\n";
 $body .= "Message: ".$usermessage. "\r\n";

mail($to,$usermobn,$body);
 
echo "<script>alert('Your querry has been submitted')</script>";

 window.history.go(-1);


?>