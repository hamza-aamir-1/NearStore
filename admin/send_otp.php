<?php session_start();
include_once 'assets/classes/DB.php';

$email = mysqli_real_escape_string($conn, $_POST['email']);

$sql = "SELECT * FROM `mamber` WHERE `email`='$email'";
$fire = mysqli_query($conn, $sql);

if(mysqli_num_rows($fire) > 0)
{
    $otp = rand(11111,99999);
    mysqli_query($conn, "UPDATE `mamber` SET `otp`='$otp' WHERE `email`='$email'");
    $html='<h2>Your OTP verification code is</h2>'.$otp;
    smtp_mailer($email,'OTP Verification',$html);
    $_SESSION['EMAIL'] = $email;
    echo "yes";
}
else
{
    echo "no_exists";
}


function smtp_mailer($to,$subject, $msg){
	require_once("smtp/class.phpmailer.php");
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPDebug = 1; 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "af1114773@gmail.com";
	$mail->Password = "faraz23@#@#";
	$mail->SetFrom("af1114773@gmail.com");
	// $mail->addAttachment("dummy.pdf");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		return 0;
	}else{
		return 1;
	}
}

?>