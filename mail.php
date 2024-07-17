<?php 
if(isset($_POST['submit'])){
    $to = "sundharrajaneee@gmail.com,devachinna21@gmail.com"; // this is your Email address
	
    $from = $_POST['email']; // this is the sender's Email address
    $fname = $_POST['username'];
	$email_id = $_POST['email'];
	$number = $_POST['number'];
	$subject = $_POST['subject'];
	$message1 = $_POST['message'];
    $subject1 = "Digital Technology Contact Enquiry";
	$subject2 = "Acknowledgement";
   
     $message = "Name:" . $fname . "\n\n" . "Mail ID :" .  $email_id . "\n\n" . "Contact Number:" . $number . "\n\n" . "Subject:" . $subject . "\n\n" . "Message:" . $message1;
    $message2 = "Thank you for Enquiry." . $fname  ;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
	
    
    mail($to,$subject1,$message,$headers);
	
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
	
   echo "Mail Sent. Thank you " . $fname .", we will contact you shortly.";
   
    }                                                                 
?>