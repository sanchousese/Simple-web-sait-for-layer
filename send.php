<?php
class Calculator {

public static function sendMail() {
var_dump($_POST);

$email = "legalad.consult@gmail.com";
$subject = "Замовлення консультації";


$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

$message = "Ім'я: " .$_POST["name"] ."\n"
	."Номер телефону: " .$_POST["phone"] ."\n"
	."Email: " .$_POST["mail"] ."\n"
	."Повідомлення: " .$_POST["message"];

mail($email, $subject, $message); 
}

}

Calculator::sendMail();
header("location: index.html");
?>