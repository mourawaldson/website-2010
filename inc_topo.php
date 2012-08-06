<?php
$pagina = end(explode("/",$_SERVER['PHP_SELF']));
$pagina = explode(".",$pagina);
$pagina = ucwords($pagina[0]);

$active = ' class="active"';

$active_eu = false;
$active_projetos = false;
$active_contato = false;

switch($pagina)
{
	case "Eu":
		$active_eu = true;
		$description = 'Aqui tem um pouco sobre mim, minha formação acadêmica e meus conhecimentos!';
		break;
	case "Projetos":
		$active_projetos = true;
		$description = 'Alguns projetos que participei de diferentes formas, mas sempre da melhor forma possível!';
		break;
	case "Contato":
		$active_contato = true;
		$description = 'Entre em contato comigo, mande sugestões, críticas ou qualquer coisa que achar pertinente!';
		break;
}

$keywords = 'Portfolio,Waldson,Cabral,Moura,www.waldsonmoura.com.br';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Waldson Moura - <?php echo $pagina; ?></title>
	<meta name="verify-v1" content="VNb/MMVH+7QVPciiic/L5dXHdb0P1NP0gTk3StUKqnc=" />
	<meta name="title" content="Waldson Moura" />
	<meta name="description" content="<?php echo $description; ?>" />
	<meta name="keywords" content="<?php echo $keywords; ?>" />
	<meta name="language" content="pt-BR" />
	<meta name="robots" content="All" />
	<meta name="revisit" content="7 days" />
	<meta name="google-site-verification" content="oEsxB5IUYS9D2vrIdqB_4ZDI_EIwKLMb-1vbnsVsoOk" />
	<link href="css/screen.css" type="text/css" rel="stylesheet" media="screen" />
	<!--<script type="text/javascript" src="http://www.google-analytics.com/ga.js"></script>
	<script type="text/javascript">
		var pageTracker=_gat._getTracker('UA-3440340-3');
		pageTracker._initData();
		pageTracker._trackPageview();
	</script>-->
</head>

<body>

	<div id="container">
    
    	<h1>Waldson Moura</h1>

		<div id="content">
			<ul id="nav">
				<li><a<?php if($active_eu) echo $active; ?> href="eu.php" title="eu">eu</a></li>
				<li><a<?php if($active_projetos) echo $active; ?> href="projetos.php" title="projetos">projetos</a></li>
				<li><a<?php if($active_contato) echo $active; ?> href="contato.php" title="contato">contato</a></li>
			</ul>
