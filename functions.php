
<?php

function menuItem($APPpath, $page, $label){
		?>
        <li<?php 
        if ($APPpath . $page == $_SERVER["PHP_SELF"]){
          echo "class=\"active\"";
        }
        ?>><a href="<?php echo $APPpath . $page; ?>"><?php echo $label;  ?></a></li>
        <?php
}

function sendEmail($mail,$primatelji,$title,$msg){
	date_default_timezone_set('Etc/UTC');
	$mail->isSMTP();
	$mail->SMTPDebug = 0;
	$mail->Debugoutput = 'html';
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587;
	$mail->SMTPSecure = 'tls';
	$mail->SMTPAuth = true;
	$mail->Username = "";
	$mail->Password = "";
	$posiljatelj = mb_encode_mimeheader("","UTF-8");
	$mail->setFrom('', $posiljatelj);
	foreach ($primatelji as $primatelj) {
		$mail->addAddress($primatelj->email, mb_encode_mimeheader($primatelj->ime . " " . $primatelj->prezime));
	}
	$mail->Subject = $title;
	$mail->msgHTML($msg);
	$mail->AltBody = $msg;
	if (!$mail->send()) {
	    return"Mailer Error: " . $mail->ErrorInfo;
	} else {
	   return "OK";
	}
}