<?php
// Check for empty fields
if(empty($_POST['nome'])  		||
   empty($_POST['email']) 		||
   empty($_POST['telefone']) 		||
   empty($_POST['pedido'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "Faltou preencher algum campo... retorne à tela principal.";
	return false;
   }

$name = $_POST['nome'];
$email_address = $_POST['email'];
$phone = $_POST['telefone'];
$message = $_POST['pedido'];

$to = $email_address;
$email_subject = "Solicitação de Orçamento de $name";
$email_body = "Você recebeu uma solicitação de orçamento de $name.\n\n"."Descrição:\n\nNome: $name\n\nEmail: $email_address\n\nTelefone: $phone\n\nDetalhes do pedido:\n$message";
$headers = "From: naoresponda@designers.com\n";
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
 header("location:../emailEnviado.html");
return true;
?>
