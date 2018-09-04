<?php
	$project_name = "Звонок";
	$from_email = "i@up-site.com.ua";
	$to_email = "denis9524@gmail.com";
	
	$mobile = trim($_POST["mobile"]);
	
	$message = "Телефон: $mobile" ;
	$header = "From: $from_email <br>";
	$headers = "Content-type: text/html; charset=\"utf-8\"";
	
	$send_mail = mail($to_email, $project_name, $message, $headers);
	if($send_mail){
		
	}
	else{
		echo "Ошибка!";
	}
?>