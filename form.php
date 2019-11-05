<?php
session_start();
	$full_name=$_POST['full_name'];
	$last_name=$_POST['last_name'];
	$email=$_POST['email'];
	$phn_no=$_POST['phn_no'];
	$company_name=$_POST['company_name'];
	$msg=$_POST['msg'];
	$file_name=$_SESSION['file'];
		$to = $email;
			$subject = "Download Link";
			$txt = "Hello ".$full_name." ".$last_name."<br/> Here are your details <br/>Your Phone no:".$phn_no."<br/>Company Name:".$company_name."<br/>Message:".$msg."!Your download link is cruzfilms.com/newsite/upload/".$file_name;
			 $headers  = 'MIME-Version: 1.0' . "\r\n";
  			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers = 'From: trqnwr@gmail.com';
			$headers ="Content-type:text/html;charset=iso-8859-1" . "\r\n". "From: trqnwr@gmail.com";
			'X-Mailer: PHP/' . phpversion();


			if(mail($to,$subject,$txt,$headers))
			{
				print "<div style='color:green;font-weight:bold;'>Success</div>";
			}
			else
			{
				print "<div style='color:red;font-weight:bold;'>Failed</div>";

			}

		//echo "<script>javascript:window.location = 'index.php#submission'</script>";
?>