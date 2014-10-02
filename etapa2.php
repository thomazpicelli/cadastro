<html>
<head>
	<title>Desenvolvendo Websites com PHP</title> 
	<meta charset="UTF-8">
<head>
<body> 
	<p align="center"><big><big><strong>
			Cadastramento - Etapa 2 de 3
	</strong></big></big></p> 
	<form method="POST" action="etapa3.php"> 

                <input type="hidden" name="nome" value="<?php echo $_POST ['nome']; ?>"> 
 		<input type="hidden" name="email" value="<?php echo $_POST ['email']; ?>"> 
 		<input type="hidden" name="datanascimento" value="<?php echo $_POST ['datanascimento']; ?>"> 
                <input type="hidden" name="sexo" value="<?php echo $_POST ['sexo']; ?>"> 
 		<input type="hidden" name="profissao" value="<?php echo $_POST['profissao']; ?>"> 
 		
		<div align="center"><center> 
			<p>Telefone: <input type="text" name="telefone" size="20" value="<?php echo $_POST['telefone'];?>"></p> 
                        <?php $telefone = $_POST['telefone']; if(empty($telefone) OR strlen($telefone)<9)
                        {echo "Verifique o preenchimento do campo Telefone (Formato: 1234-5678). <br>"; $erro=TRUE;}?>
                    </center></div>

		<div align="center"><center> 
			<p>Endereco: <input type="text" name="endereco" size="20" value="<?php echo $_POST['endereco'];?>"></p> 
                        <?php $endereco = $_POST['endereco']; if(empty($endereco))
                        {echo "Verifique o preenchimento do campo Endereço. <br>"; $erro=TRUE;} ?>
                    </center></div>

		<div align="center"><center> 
			<p>
                            Cidade: <input type="text" name="cidade" size="20" value="<?php echo $_POST['cidade']; ?>">&nbsp;&nbsp;&nbsp; 
                            <?php $cidade = $_POST['cidade']; if(empty($cidade))
                            {echo "Verifique o preenchimento do campo Cidade. <br>"; $erro=TRUE;}?>
                            Estado:<input type="text" name="estado" size="2" value="<?php echo $_POST['estado'];?>">
                            <?php $estado = $_POST['estado']; if(strlen($estado)!=2 OR empty($estado))
                            {echo "Verifique o preenchimento do campo Estado. <br>"; $erro=TRUE;}?>
                        </p> 
		</center></div>
		
		<div align="center"><center> 
			<p>CEP: <input type="text" name="cep" size="9" <?php echo $_POST['cep'];?>></p> 
                        <?php $cep = $_POST['cep']; if(strlen($cep)<9 OR empty($cep))
                        {echo "Verifique o preenchimento do campo CEP (Formato: 12345-678). <br>"; $erro=TRUE;}?>
 		</center></div>
		
		<div align="center"><center>
			<p><input type="submit" value="Prosseguir &gt;&gt;" name="prosseguir"></p> 
 		</center></div> 
	</form> 
</body> 
</html> 
