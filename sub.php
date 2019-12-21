<?php
  if (isset($_POST["submit"])) {
    $aa = $_POST["a"];
    $ab = $_POST['b'];
    $ac = $_POST["c"];
    $ad = $_POST["d"];

    $to = 'shihanbinuka@gmail.com';
    $subject = 'Form Submission';
    $message = "Name: " . $aa ."\n" .
               "Phone: " . $ac ."\n" .
               "Des: " . $ad;
    $headers = "From: " . $ab;

    if (mail($to, $subject, $message, $headers)) {
      echo "Thanks";
    }
    else {
      echo "oops";
    }

  }
?>
