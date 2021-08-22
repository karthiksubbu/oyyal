<?php
	$name = strip_tags($_GET['name']);
	$frdmobile = strip_tags($_GET['frdmobile']);
	$frdemail = strip_tags($_GET['frdemail']);
	$frdplace = strip_tags($_GET['frd_place']);
	if(isset($_GET['frd_vol'])){ $frdvol = $_GET['frd_vol']; }else{ $frdvol = ''; }
	if(isset($_GET['frdfun'])){ $frdfun = $_GET['frdfun']; }else{ $frdfun = ''; }
	
	$to = "oyyalfoundation@gmail.com, oyyalfoundation.jeyakumar@gmail.com, oyyalfoundation.aravinth@gmail.com, oyyalfoundation.moorthy@gmail.com"; 
	$subject = "Oyyal Volunteer Request";
	$message = '<p>Hi,<br><br>Volunteer Name: '.$name.'</p>
	<p>Mobile: '.$frdmobile.'</p>
	<p>Email: '.$frdemail.'</p>
	<p>Place: '.$frdemail.'</p>
	<p>Interested Way Of Contribution: '.$frdvol.', '.$frdfun.'</p>';
	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	// More headers
	$headers .= 'From: '.$name.'<noreply@oyyal.com>' . "\r\n";
	
	if(mail($to,$subject,$message,$headers)){
		$tocmf = $frdemail;
		$subjectcmf = "RE: Oyyal Volunteer Request";
		$messagecmf = '<p>Hi '.$name.', <br><br>Thank you for showing interest in Oyyal Foundation.<br /> We have noted down your Query / Interest and we get back to you asap.</p>';
		// Always set content-type when sending HTML email
		$headerscmf = "MIME-Version: 1.0" . "\r\n";
		$headerscmf .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		// More headers
		$headerscmf .= 'From: Oyyal Foundation <noreply@oyyal.com>' . "\r\n";
		mail($tocmf,$subjectcmf,$messagecmf,$headerscmf);
		echo 1;
	}else{
		echo 0;
	}
?>