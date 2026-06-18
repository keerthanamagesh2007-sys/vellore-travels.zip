<?php
include "mail/class.phpmailer.php";
//include("mail/class.smtp.php");
/*if(isset($_POST['submit']))	
{*/
if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
	{
        //your site secret key
        $secret = '6LdZyZwUAAAAAL3qxabmetz88DgDoaQWEQBkflNO';
        $sitesec = $_POST['g-recaptcha-response'];
        //get verify response data
        $ip = $_SERVER['REMOTE_ADDR'];
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$sitesec."&remoteip=".$ip;
        //echo $url;exit;
        //$verifyResponse = open_https_url("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$sitesec&remoteip=$ip");
        $res=getCurlData($url);
        $res = json_decode($res,true);


	$FullName = $_POST["FullName"];
	$Address = $_POST["Address"];
	$City = $_POST["City"];
	$Zip_Code = $_POST["Zip_Code"];
	$PhoneNo = $_POST["PhoneNo"];
$Email = $_POST["Email"];
$Comments = $_POST["Comments"];

		$Comments = "	<table>
					<tr>
						<td>Name</td><td> : </td><td>$FullName</td>
					</tr>
					<tr>
						<td>Address</td><td> : </td><td>$Address</td>
					</tr>
					
					<tr>
						<td>City</td><td> : </td><td>$City</td>
					</tr>
					<tr>
						<td>Zip Code</td><td> : </td><td>$Zip_Code</td>
					</tr>
					<tr>
						<td>Phone Number</td><td> : </td><td>$PhoneNo</td>
					</tr>
					<tr>
						<td>Email ID</td><td> : </td><td>$Email</td>
					</tr>
					<tr>
						<td>Comments</td><td> : </td><td>$Comments</td>
					</tr>
					
				
				</table>
						";	

	$mail = new PHPMailer(); // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; // authentication enabled
	$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
	$mail->Host = "mail.velloretravels.com";
	$mail->Port = 25; // or 465
	$mail->Username = "noreply@velloretravels.com";
	$mail->Password = "0p,20m9Z9.k8";
	$mail->Priority = 1; // Highest priority - Email priority (1 = High, 3 = Normal, 5 = low)
	$mail->CharSet = 'UTF-8';
	$mail->Encoding = '8bit';
	$mail->ContentType = 'text/html; charset=utf-8\r\n';
	//$mail->AddAddress("deivakanni@jbcs.co.in");//andal@vastushastram.com gd.generaldrive@gmail.com
	$mail->AddAddress("admin@vellorecity.com");//pchockalingam@gmail.com
	$mail->AddReplyTo($Email, $FullName); 
	$mail->SetFrom('noreply@velloretravels.com', $FullName); //admin@generaldrive.in
	$mail->Subject = "Velloretravels.com contact form";
	$mail->Body = $Comments;
	$mail->IsHTML(true);
	 if(!$mail->Send()){

           // echo "<script>window.location.href='contact.php?error=There was an error trying to send your message. Please try again later.  ';</script>"; /*. 
	 	$mail->ErrorInfo; 
	}
	else{
		echo "<script>window.location.href='thanks.php?msg=Thank you for your message. It has been sent. ';</script>";

	}
	$mail->SmtpClose();
}
else
{
echo "<script>window.location.href='contactus.php?error= Please Enter the Valid Captcha ';</script>";
}
/*}*/


?>
<?php
function getCurlData($url)
{
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($curl, CURLOPT_TIMEOUT, 10);
	curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
	$curlData = curl_exec($curl);
	curl_close($curl);
	return $curlData;
}
?>
