
<?php

/* These are the variable that tell  where the email will be sent.*/


	$id=$_REQUEST['id'];
	$jobid=$_REQUEST['jobid'];
	$mailto = 'support@leafwearables.com';

if($id==5)
{
	if($jobid=="APPD101")
	{
	$category =' [LEAF:job]APPD101 ';
	$emailSubject = 'application for android developer' ;
	}
	
	if($jobid=="EMBD101")
	{
		$category= ' [LEAF:job]EMBD101 ' ;
		$emailSubject = ' application for embedded engineer ' ;
	}
	
	if($jobid == "MKT101")
	{
		$category = '[LEAF:job]MKT102 ' ;
		$emailSubject = ' application for marketing manager ';
	}
	
	if($jobid == "MKT101")
	{
		$category = '[LEAF:job]MKT101 ' ;
		$emailSubject = 'application for technical blogger ';
	}
		

/* These will gather what the user has typed into the fieled. */

	$name = $_POST['firstname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$rating = $_POST['rating'];
	
	
	



/* This takes the information and lines it up the way you want it to be sent in the email. */

	$body = <<<EOD
	<br><hr><br><table>
	<tr><td> Name:</td> <td>$name</td></tr><br>
	<tr><td> Email:</td> <td> $email</td></tr> <br>
	<tr><td> Phone:</td> <td> $phone</td> </tr><br>
	<tr><td> Address:</td> <td> $address </td> </tr>
	<tr><td> Rating:</td> <td> $rating </td> </tr>	</table>
EOD;
}


$headers = "From: $category\r\n"; // This takes the email and displays it as who this email is from.
$headers .= "Content-type: text/html\r\n"; // This tells the server to turn the coding into the text.
$success = mail($mailto, $emailSubject, $body, $headers); // This tells the server what to send.
header("location:career.html?info=$success");
?>

