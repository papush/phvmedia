<?php
if(isset($_POST['submit'])){
    $to = "media@pablohellmund.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    // $company = $_POST['company'];
    //$last_name = $_POST['last_name'];
    $subject = "Web contact form";
    //$subject2 = "Copy of your form submission";
    $message = $POST['message'];
    // $first_name . " from " . $_POST['message'] . " Has claimed her/his free 4 picture promo!
    // The pictures will be sent to the following address: " . $from . "\n\n" ;
    //$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    header( 'Location: https://pablohellmund.com/promo/thankyou.html' ) ;
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
