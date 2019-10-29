<?php 
	
	if (isset($_POST['email'])&& !empty($_POST['email'])) {
		
	
	$nome = addcslashes($_POST['name']);
	$phone = addcslashes($_POST['phone']);
	$email = addcslashes($_POST['email']);

	$to = "renato@renato";
	$subject = "Landpage - Usuário";
	$body = "Nome: ".$nome."\r\n"
			"Phone: " .$phone. "\r\n"
			"Email: " .$email. "\r\n";
	$header = "From: teste@idealquadros.com.br"."\r\n"."Reply-To: " .$email."\r\n"."X-Mailer:PHP/".phpversion();
	if (mail($to,$subject,$body,header)) {
		echo '<div class="sucesso"> Obrigado por se cadastrar!"</div>"';
	}else{
		echo '<div class="erro"> Algo saiu errado, preencha os dados e tente novamente!"</div>"';
	}
}
 ?>