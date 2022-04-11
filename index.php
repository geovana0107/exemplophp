<?php

  session_start();

  if(isset($_SESSION['codigo']) && !empty($_SESSION['codigo'])){
      echo "";
    }else{
      header("Location: login.php");
    }
  
    
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Pagina Principal</title>
  <style>
    body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(80deg, rgb(20, 126, 175),rgb(228, 37, 85)); 
    }
    div{
      background-color: rgba(0, 0, 0, 0.8);
      position:absolute;
      top: 50%;
      left:50%;
      transform: translate(-50%,-50%);
      padding: 85px;
      border-radius: 20px;
    }
    p{
      background-color: #040005;
      padding: 10px;
      border-radius: 10px;
      font-size:20px;
    } 
    a:hover{
      
      cursor: pointer;
      color: white;
    }

  </style>
</head>

<body>
  <div>
    <p>
      <a href = formulario.php> Cadastre Novos Usuários </a>
    </p>  
    <br>
    <p>
    <a href= sair.php> Sair </a>
    </p>   
    <br>
    <p>
    <a href= Voltar.php> Voltar </a>
    </p>   
  </div>
</body>
</html>