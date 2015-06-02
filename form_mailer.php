<?php

/* These are the variable that tell  where the email will be sent.*/


	$id=$_REQUEST['id'];
	$jobid=$_REQUEST['jobid'];
	$mailto = 'support@leafwearables.com';

	if($id==1){
		$category = 'Skype call ';
		$emailSubject = 'skype request ' ;



		$name = $_POST['firstname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$skype= $_POST['skypeid'];
		$calldate = $_POST['calldate'];
		$calltime = $_POST['calltime'];
		$purpose = $_POST['purpose'];
		$specialRequest= $_POST['request'];




$body = <<<EOD
<br><hr><br><table>
<tr><td> Name:</td> <td>$name</td></tr><br>
<tr><td> Email:</td> <td> $email</td></tr> <br>
<tr><td> Phone:</td> <td> $phone</td> </tr><br>
<tr><td> Skype Id: </td> <td>$skype </td></tr><br>
<tr><td> Call Date:</td> <td> $calldate </td></tr> <br>
<tr><td> Call Time:</td> <td>$calltime</td> </tr><br>
<tr><td> Purpose : </td> <td>$purpose </td></tr><br>
<tr><td> Special Request:</td><td> $specialRequest </td></tr><br></table>
EOD;

}

if($id==2)
{
		$category = 'Meeting ';
		$emailSubject = 'meeting request ' ;



	$name = $_POST['firstname'];
	$number = $_POST['plus'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$skype= $_POST['skypeid'];
	$desiredDate = $_POST['meetingdate'];
	$desiredTime = $_POST['meetingtime'];
	$address = $_POST['address'];
	$purpose = $_POST['purpose'];
	$specialRequest= $_POST['request'];




$body = <<<EOD
<br><hr><br><table>
<tr><td> Name:</td> <td>$name</td></tr><br>
<tr><td> Total people:</td> <td> $number</td></tr> <br>
<tr><td> Email:</td><td> $email </td></tr> <br>
<tr><td> Phone:</td> <td> $phone</td> </tr><br>
<tr><td> Desired Date:</td> <td> $desiredDate </td></tr> <br>
<tr><td> Desired Time:</td> <td>$deisredTime</td> </tr><br>
<tr><td> Address:</td> <td>$address </td> </tr> <br>
<tr><td> Purpose : </td> <td>$purpose </td></tr><br>
<tr><td> Special Request: </td><td>$specialRequest </td></tr><br></table>
EOD;
}

if($id==3)
{
		$category = 'Instant Review ';
		$emailSubject = 'Reviews' ;



		$name = $_POST['firstname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$rating = $_POST['rating'];
		$review= $_POST['review'];




$body = <<<EOD
<br><hr><br><table>
<tr><td> Name:</td> <td>$name</td></tr><br>
<tr><td> Email:</td> <td> $email</td></tr> <br>
<tr><td> Phone:</td> <td> $phone</td> </tr><br>
<tr><td> Star Rating:</td> <td> $rating </td></tr> <br>
<tr><td> Review : </td> <td>$review </td></tr><br>
</table>
EOD;


}

if($id==4)
{
	$category = 'Comments ';
	$emailSubject = 'contact form' ;

/* These will gather what the user has typed into the fieled. */

	$name = $_POST['name'];
	$email = $_POST['email'];
	$comments = $_POST['comments'];



/* This takes the information and lines it up the way you want it to be sent in the email. */

	$body = <<<EOD
	<br><hr><br><table>
	<tr><td> Name:</td> <td>$name</td></tr><br>
	<tr><td> Email:</td> <td> $email</td></tr> <br>
	<tr><td> Comments:</td> <td> $comments</td> </tr><br>
	</table>
EOD;
}

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

if($id==6)
{
		$category = 'Subscription';
		$emailSubject = 'Newsletter Subscription' ;



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
header("location:contact.html?info=$success");
?>

