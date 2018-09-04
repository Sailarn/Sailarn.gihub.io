<?php
	$project_name = "Форма";
	$from_email = "i@up-site.com.ua";
	$to_email = "denis9524@gmail.com";
	
	$name = trim($_POST["name"]);
	$phone = trim($_POST["phone"]);
	$email = trim($_POST["email"]);
	$message = trim($_POST["message"]); 
	
	$message = "Имя: $name <br>Телефон: $phone <br>Еmail: $email <br>Message: $message" ;
	$header = "From: $from_email <br>";
	$headers = "Content-type: text/html; charset=\"utf-8\"";
	
	$send_mail = mail($to_email, $project_name, $message, $headers);
	if($send_mail){
		
	}
	else{
		echo "Ошибка!";
	}
?>
