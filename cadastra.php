<html>
<head> 
	<title>Desenvolvendo Websites com PHP</title> 
	<meta charset="UTF-8">
</head>
<body> 
<?php
    $nome      = $_POST["nome"];
    $email     = $_POST["email"];
    $datanasc  = $_POST["datanascimento"];
    $sexo      = $_POST["sexo"];
    $profissao = $_POST["profissao"];
    
    $telefone  = $_POST["telefone"];
    $endereco  = $_POST["endereco"];
    $cidade    = $_POST["cidade"];
    $estado    = $_POST["estado"];
    $cep       = $_POST["cep"];
    $username  = $_POST["username"];
    $senha     = $_POST["senha"];
    $csenha    = $_POST["confirma_senha"];


    	
    echo "Voce está cadastrado. Seus dados registrado:";
    echo "Nome: ".$nome ;
    echo "E-mail: ".$email ;
    echo "Data de Nascimento: ".$datanasc ;
    echo "Sexo: ".$sexo ;
    echo "Profissão: ".$profissao;
    echo "Telefone: ".$telefone ;
    echo "Endereço: ".$endereco ;
    echo "Cidade: ".$cidade;
    echo "Estado: ".$estado ;
    echo "CEP: ".$cep ;
    echo "Username: ".$username;
    echo "Senha: ".$senha;
    echo "Confirma Senha: ".$csenha;
     
		

?>

</body> 
</html>