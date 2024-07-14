<?php 
if(isset($_POST['submit'])){
    $email_to = "akkushwaha018@gmail.com"; // this is your Email address
    $from = $_POST['email_id'];
    $name = $_POST['your_name'];
    $user_city = $_POST['user_city'];
    $mobile = $_POST['mobile_number'];
    $customer_query = $_POST['customer_query'];

    $subject = "Book OPD at ₹ 99";
    $message = "Name:- ". $name . "\n\n" . "Email:- ". $from. "\n\n" . "City:- ". $user_city. "\n\n" . "Mobile Number:- " . $mobile. "\n\n". "Query:- ".$_POST['customer_query'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $email_to;
    mail($email_to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    header('Location: thank-you.html');
    }
?>