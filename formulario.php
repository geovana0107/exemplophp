<?php
    if($_POST){
      $nome=$_POST['nome'];
      $email=$_POST['email'];
      $senha=$_POST['senha'];

      $dsn = "mysql:dbname=geovana;host=localhost";
      $dbuser = 'root';
      $dbpass = '';

      try{
        $db = new PDO($dsn, $dbuser, $dbpass);

        $sql = $db->query("INSERT INTO cadastro (codigo, email, senha) values ('".$nome."', '".$email."', '".$senha."')");

        print "Cadastro efetuado com sucesso";
     
      }
      catch(PDOException $erro){
          print "Erro ao conectar ao banco: ". $erro->getMessage();

      }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Formulário de Cadastro</title>
    <style>
        body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(to right, rgb(62, 37, 202), rgb(133, 6, 150));
}
.box{
    color:white;
    position:absolute;
    top:50%;
    left:50%;
    transform: translate(-50%, -50%);
    background-color: rgba(0,0,0,0.8);
    padding: 40px;
    border-radius: 13px;
    width: 35%;
}
fieldset{
    border: 5px solid rgb(11, 168, 230);
    padding: 20px;
    
}
legend{
    border:1px solid rgb(88, 28, 167);
    padding: 7px;
    text-align: center;
    background-color:rgb(108, 37, 201);
    border-radius: 10px;
}
.inputBox{
    position: relative;
}
.inputUser{
    background:none;
    border:none;
    border-bottom: 1px solid white;
    outline: none;
    color:white;
    font-size: 15px;
    width: 100%;
    letter-spacing: 2px;
}
#enviar{
    background-image: linear-gradient(to right,rgb(62, 37, 202), rgb(133, 6, 150));
    width: 100%;
    border:none;
    padding: 15px;
    color: white;
    font-size: 15px;
    cursor: pointer;
    border-radius: 10px;
}
#enviart:hover{
    background-image: linear-gradient(to right,rgb(34, 66, 248), rgb(146, 68, 140)); 
}
#limpar{
    background-image: linear-gradient(to right,rgb(62, 37, 202), rgb(133, 6, 150));
    width: 100%;
    border:none;
    padding: 15px;
    color: white;
    font-size: 15px;
    cursor: pointer;
    border-radius: 10px;
}
#p{
 
 padding: 10px;
 border-radius: 10px;
 font-size:20px;
}
a:hover{
 cursor: pointer;
}

</style>
</head>
<body>
    <div class="box">
        <form method="POST" action="formulario.php">
        
            <fieldset>
                <legend><br>Formulário do Usuário</br></legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome"class="labelInput">Nome completo</label>
                </div>
                <br></br>
                <div class="inputbox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email"class="labelInput">Email</label>
                </div>
                <br></br>
                <div class="inputbox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha"class="labelInput">Senha</label>
                </div>
                <br></br>
                <input type='submit'name='btn_enviar'value='Enviar'id='enviar'>
                <br></br>
                <input type='reset'name="btn_Limpar Campos"value="Limpar Campos"id='limpar'>
                <p>
                <a href= Voltar.php> Voltar </a>
                </p>  
            </fieldset>

        </form> 
    </div>

</body>
