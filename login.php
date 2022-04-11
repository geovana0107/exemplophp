<?php
   session_start();

    if(isset($_POST['email']) && !empty($_POST['email'])) {
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);


        $dsn = "mysql:dbname=geovana;host=localhost";
        $dbuser = 'root';
        $dbpass = '';

        try {
            $db = new PDO($dsn, $dbuser, $dbpass);

            $sql = $db->query("SELECT * FROM cadastro WHERE email = '$email' AND senha = '$senha'");
        

            if ($sql->rowCount() > 0){
                $dado = $sql->fetch();
                
                $_SESSION['codigo'] = $dado['codigo'];
                header("Location: index.php");

            }
            
            else{
                echo "Usúario ou Senha Inválida";
            }
    } 
    catch(PDOException $erro){
    echo "Falhou: " . $erro->getMessage();
    }
}
?>



<!DOCTYPE html>
<html lang="bt-br">
<head>
    <meta charset="UTF-8">
    <title>Formulario Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(30deg, rgb(37, 29, 150),rgb(153, 11, 99)); 
        }
        div{
            background-color: rgba(0, 0, 0, 0.9);
            position:absolute;
            top: 50%;
            left:50%;
            transform: translate(-50%,-50%);
            padding: 85px;
            border-radius: 20px;
            color:white;
        }
        input{
            padding: 8px;
            border:none;
            outline: none;
            font-size: 16px;
        }
        #entrar{
            color:black;
            width: 100%;
            background-image: linear-gradient(30deg, rgb(37, 29, 150),rgb(153, 11, 99));
        }
        
    </style>
</head>
<body>
    
    <div>
        <h1>Login</h1>
        <form method="POST">
            <p>
             Email: <input type='text' name='email' >
            </p>

            <p>
             Senha: <input type='password' name='senha' >
            </p>
            <input type='submit'name='btn_Entrar'value='Entrar'id='entrar'>
        </form>
    </div>
</body>
</html>