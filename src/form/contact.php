<?php
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $formcontent = "From: $fname $lname \n $phone \n Message: $message";
  $recipient = "ellissutehall@gmail.com";
  $mailheader = "From: $email \r\n";
  mail( $recipient, $subject, $formcontent ) or die ("Error!");
?>
<div id="home" class="expanded row hero">
  <div class="large-4 medium-8 small-10 columns hero-box large-centered medium-centered small-centered">
    <h2>Thank you, your message has been sent. We aim to reply in 48 hours.</h2>
  </div>
</div>
