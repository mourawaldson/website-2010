<?php

$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$mensagem = nl2br(strip_tags($_REQUEST['mensagem']));

$to = "waldsoncabral@gmail.com";

$to = explode(", ",$to);

if ( empty($nome) || empty($email) || empty($mensagem) )
	{
		header("Location: contato.php?msg=Preencha todos os campos!");
	}
	else
	{
		$mensagem = '
		<p>Nome: '.$nome.'</p>
		<p>E-Mail: '.$email.'</p>
		<p>Mensagem:<br /> '.$mensagem.'</p>';
	
		$headers = "From: contato@waldsonmoura.com.br\n"
		   . "Reply-To: ".$email."\n"
		   . "Content-Type: text/html; charset=iso-8859-1; format=flowed\n"
		   . "MIME-Version: 1.0\n"
		   . "Content-Transfer-Encoding: 8bit\n"
		   . "X-Mailer: PHP";

		for($i=0;$i<count($to);$i++)
		{
			if (mail($to[$i], "Contato",$mensagem,$headers))
			{
				header("Location: contato.php?msg=Obrigado pelo contato!");
			}
			else
			{
				header("Location: contato.php?msg=Erro no envio da mensagem!");
			}
		}
	}
?>