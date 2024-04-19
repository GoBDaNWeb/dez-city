<?
/* Старый скрипт
//$to .= "<info@rosdez.com>"; 


$to = "dovbnia.a.a@yandex.ru"; // емайл получателя данных из формы
$tema = "Форма обратной связи"; // тема полученного емайла
$message = 'Номер телефона: '.$_GET['phone'];//присвоить переменной значение, полученное из формы name=name
$headers = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
*/
?>




<?php 
//$to = "<info@rosdez.com>"; 
$to = "bogdan.ognitsiy@yandex.ru";

//$to = "la2ers@yandex.ru";
//$to = "aurora@elifan.ru";
$subject =  "Сообщение из формы обратной связи";
$message = "<p>Вам было отправлено сообщение из формы обратной связи</p><br>";


if (!empty($_GET["phone"])) { 
	$message .= '<p> Телефон: GET<b>'.$_GET["phone"].'</b></p>'; 
	}

if (!empty($_POST["phone"])) { 
	$message .= '<p> Телефон: POST<b>'.$_POST["phone"].'</b></p>'; 
	}


/*
$p = http_build_query($_POST);
$message .= '<p> post:  '.$p.'</p>'; 

$g = http_build_query($_GET);
$message .= '<p> get:  '.$g.'</p>'; 
*/



$headers  = "Content-type: text/html; charset=UTF-8 \r\n";

$sendMail = mail($to, $subject, $message, $headers);

*/
?>
