<?php 

$name = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$msg = addslashes($_POST['msg']);


$to = "bressafrancisco@gmail.com";
$subject = "Formulário do Site";
$body = "Nome: ".$name. "\n"."Email: ".$email. "\n"."Mensagem ".$msg;






?>