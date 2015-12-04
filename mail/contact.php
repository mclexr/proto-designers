<?php
// Check for empty fields
if(empty($_POST['nome'])  		||
   empty($_POST['email']) 		||
   empty($_POST['telefone']) 		||
   empty($_POST['mensagem'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$name = $_POST['nome'];
$email_address = $_POST['email'];
$phone = $_POST['telefone'];
$message = $_POST['mensagem'];

$to = 'yourname@yourdomain.com';
$email_subject = "Solicitação de Orçamento de $name";
$email_body = "Você recebeu uma solicitação de orçamernto de $name.\n\n"."Descrição:\n\nNome: $name\n\nEmail: $email_address\n\nTelefone: $phone\n\nDetalhes do pedido:\n$message";
$headers = "From: naoresponda@designers.com\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
