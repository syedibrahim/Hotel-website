<?php
$name=$_Post['userName'];
$email_from = 'electroniumweb@gmail.com';
$email_subject = " Hotel booking successful";
$email_body= "User email: $userName \n".
             "Message: Thank you for booking";
$to = "ibrahimsyed026@gmail.com";
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $name \r\n";

$retval = mail($to,$email_subject,$email_body,$headers);
/* if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }*/

$name1= $_POST["userName"]; 
 echo "Dear Customer,"."<br><br>". "Our customer care executive will reach you shortly"."<br>"." <em><u>User Email</u>: </em><b>$name1</b>"."<br><br><br>";
echo "<u><b>Recieved Feedback:</b></u>"."<br><br><br>";
$name2= $_POST["message"]; 
 echo $name2."<br><br><br><hr>";
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("l");

//header("Location: contact.html");
?>