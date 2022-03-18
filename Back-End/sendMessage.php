<?php
$to      = "rbru-metrika@yandex.ru" ;
$subject = "vital.161@example.com";
$message = 'Вы были записаны на прием!';
$headers = 'From: $subject\r\nReply-To: $subject\r\nReturn-Path: $subject\r\nContent-Type: text/plain; charset=utf-8\r\nContent-Transfer-Encoding: 8bit';

if(mail($to, $subject, $message, $headers))
{
    echo "Message is delivering!";
} else {
    echo "Error, dude!";
}

?>
