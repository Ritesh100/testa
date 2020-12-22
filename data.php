<?php 
if (isset($_POST['submit'])) {
	$name =trim($_POST['name']);
	$Number=trim($_POST['Number']);
	$email=trim($_POST['email']);
	$symptioms =trim($_POST['symptioms']);
	$date=trim($_POST['date']);
	$time=trim($_POST['time']);

 $myMail= "reteshthapakaji@gmail.com";
  $header = "From: " . $email;
  $message2 = "You have received a  appointment  from ". $name .".\n\n".$Number.".\n\n".$symptioms."\n\n".$date."\n\n".$date."\n\n".$time;
    mail($myMail, $subject, $message2, $header);
    echo '<script>alert("Appointment requesst successfully ! ")</script>';
    echo '<script>window.location.href="appointment.php";</script>';
}
 ?>