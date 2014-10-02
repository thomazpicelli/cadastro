<!DOCTYPE html>
<html>
    <head> 
	<title>Desenvolvendo Websites com PHP</title> 
	<meta charset="UTF-8">
    </head>
    <body> 
        <form method="POST" action="cadastro.php" >
              
            <h3> Confira seus dados e finalize o processo de cadastramento </h3>
                   
            <?php
                echo "<br>";
                echo "Verifique seu cadastro:";
                echo "<br>";
                echo "Nome: ".$_POST['nome']."<br/>";
                echo "Email: ".$_POST['email']."<br/>";
                echo "Data de nascimento: ".$_POST ['datanascimento']." (aaaa/mm/dd) <br/>";
                echo "Sexo: ".$_POST['sexo']."<br/>";
                echo "Profissão: ".$_POST['profissao']."<br/>";
                echo "Telefone: ".$_POST['telefone']."<br/>";
                echo "Endereço: ".$_POST['endereco']."<br/>";
                echo "Cidade: ".$_POST['cidade']."<br/>"; 
                echo "Estado: ".$_POST['estado']."<br/>";
                echo "CEP: ".$_POST['cep']."<br/>";
                echo "Username: ".$_POST['username']."<br/>";
                echo "<br>";
            ?>
            <br/>
            <?php include 'cadastro.php'; ?>
        </form>    
    </body> 
</html>