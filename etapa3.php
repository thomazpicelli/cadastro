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
            
                <input type="hidden" name="nome" value="<?php echo $_POST['nome']; ?>"> 
 		<input type="hidden" name="email" value="<?php echo $_POST['email']; ?>"> 
 		<input type="hidden" name="datanascimento" value="<?php echo $_POST['datanascimento']; ?>"> 
 		<input type="hidden" name="sexo" value="<?php echo $_POST['sexo']; ?>"> 
 		<input type="hidden" name="profissao" value="<?php echo $_POST['profissao']; ?>"> 
		<input type="hidden" name="telefone" value="<?php echo $_POST['telefone']; ?>"> 
		<input type="hidden" name="endereco" value="<?php echo $_POST['pendereco']; ?>"> 
		<input type="hidden" name="cidade" value="<?php echo $_POST['cidade']; ?>"> 
		<input type="hidden" name="estado" value="<?php echo $_POST['estado']; ?>"> 
		<input type="hidden" name="cep" value="<?php echo $_POST['cep']; ?>"> 
			
 		<div align="center"><center>
			<p>Username: <input type="text" name="username" size="10" value="<?php $_POST['username']; ?>"></p> 
                        <?php $username = $_POST['username']; if(strlen($username)<6 OR empty($username))
                        {echo "Verifique o preenchimento do campo Username (deve possuir, no mínimo, 6 caracteres).<br/>";}?>
                    </center></div>

		<div align="center"><center>
			<p>Senha: <input type="text" name="senha" size="10" value="<?php $_POST['senha'];?>"></p> 
                        <?php $senha = $_POST['senha']; if (strlen($senha)<5 OR empty($senha)) 
                        {echo "Verifique o preenchimento do campo Senha (deve possuir, no mínimo, 5 dígitos).<br/>";}?>
		</center></div>
			
		<div align="center"><center>
			<p>Confirme sua Senha: <input type="text" name="confirma_senha" size="10" value="<?php $_POST['senha'];?>"></p> 
                        <?php $senha = $_POST['senha']; if (strlen($senha)<5 OR empty($senha)) 
                        {echo "Verifique o preenchimento do campo Senha (deve possuir, no mínimo, 5 dígitos).<br/>";}?>
                    </center></div>
                
		<div align="center"><center>
			<p><input type="submit" value="Finalizar Cadastro" name="fim" ></p> 
                    </center></div> 
	</form> 
</body> 
</html>