<?php

/* These are the variable that tell  where the email will be sent.*/


	$id=$_REQUEST['id'];
	$mailto = 'support@leafwearables.com';

if($id==6)
{
		$category = 'Subscription';
		$emailSubject = 'Device Booking Subscription' ;



		$email = $_POST['email'];
		




$body = <<<EOD
<br><hr><br><table>
<tr><td> E-Mail:</td> <td>$email</td></tr><br>
</table>
EOD;


}


$headers = "From: $category\r\n"; // This takes the email and displays it as who this email is from.
$headers .= "Content-type: text/html\r\n"; // This tells the server to turn the coding into the text.
$success = mail($mailto, $emailSubject, $body, $headers); // This tells the server what to send.
header("location:index.html?info=$success");
?>

