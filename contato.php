<?php
include 'inc_topo.php';
$msg = @$_GET['msg'];
?>
			<p>Críticas, elogios, sugestões, bugs, escreva o que quiser!</p>
			<form id="frmContato" method="post"  action="contact.php">
				<fieldset>
					<label for="nome">Nome:</label>
					<input type="text" id="nome" name="nome" class="campo" />
	
					<label for="email">E-mail:</label>
					<input type="text" id="email" name="email" class="campo" />
	
					<label for="mensagem">Mensagem:</label>
					<textarea name="mensagem" id="mensagem" cols="" rows="" class="campo textarea"></textarea>
		
					<input name="Enviar" type="submit" value="Enviar" class="botao" />
					<p id="resposta"><?php if($msg) echo $msg; ?></p>
				</fieldset>
			</form>
<?php
include 'inc_rodape.php';
?>