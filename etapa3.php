<html>
<head> 
	<title>Desenvolvendo Websites com PHP</title> 
	<meta charset="UTF-8">
</head>
<body> 
	<p align="center"><big><big><strong>
		Cadastramento - Etapa 3 de 3</strong></big></big>
	</p> 
	<form method="POST" action="cadastra.php"> 
		
            <?php
                 $nome      = $_POST["nome"];
                $email     = $_POST["email"];
                $datanascimento  = $_POST["datanascimento"];
                $sexo      = $_POST["sexo"];
                $profissao = $_POST["profissao"];
                $telefone  = $_POST["telefone"];
                $endereco  = $_POST["endereco"];
                $cidade    = $_POST["cidade"];
                $estado    = $_POST["estado"];
                $cep       = $_POST["cep"];
            ?>
            
                <input type="hidden" name="nome" value="<?php echo $nome; ?>"> 
 		<input type="hidden" name="email" value="<?php echo $email; ?>"> 
 		<input type="hidden" name="datanascimento" value="<?php echo $datanascimento; ?>"> 
 		<input type="hidden" name="sexo" value="<?php echo $sexo; ?>"> 
 		<input type="hidden" name="profissao" value="<?php echo $profissao; ?>"> 
		<input type="hidden" name="telefone" value="<?php echo $telefone; ?>"> 
		<input type="hidden" name="endereco" value="<?php echo $endereco; ?>"> 
		<input type="hidden" name="cidade" value="<?php echo $cidade; ?>"> 
		<input type="hidden" name="estado" value="<?php echo $estado; ?>"> 
		<input type="hidden" name="cep" value="<?php echo $cep; ?>"> 
			
 		<div align="center"><center>
			<p>Username: <input type="text" name="username" size="10"></p> 
 		</center></div>

		<div align="center"><center>
			<p>Senha: <input type="text" name="senha" size="10"></p> 
		</center></div>
			
		<div align="center"><center>
			<p>Confirme sua Senha: <input type="text" name="confirma_senha" size="10"></p> 
 		</center></div>

		<div align="center"><center>
			<p><input type="submit" value="Finalizar Cadastro" name="fim"></p> 
 		</center></div> 
	</form> 
</body> 
</html>