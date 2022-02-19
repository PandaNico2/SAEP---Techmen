<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Tela de Login</title>

</head>

<style>

body{
  background-color: #44babc4f;
    font-size: 20px
}

body center form{
  background-color: #fff;
  margin: 10px 450px;
  padding: 45px 25px;
  display: flex;
  flex-direction: column;
}

  body center form input{
  border: 0;
  border-bottom: solid 1px #44babc;
  text-align: center;  
}

button{
  background-color: transparent;
  box-shadow: none!important;
  border: solid 1px #44babc;
  color: #44babc;
  font-size: 20px;
  margin-top: 30px 
}





</style>

<body>

    <?php
    $login = "isa";
    $senha = "123";

    if(isset($_POST["senha"])){
        if($_POST["senha"] == $senha){
            echo "Login efetuado com sucesso";
            header("Location: listar.php");
        }else{
            echo "Login ou senha inválido";
        }
    }

    ?>
<center>
<img src="img/techman.png" alt="">

    <form method="post">


        <input type="password" name="senha">
        <br><br>
        
        <a href="listar.php">
        <button type="submit">enviar</button></a>



<br><br><br>
</center>
<p>

Senha: 123
</p>

<a href="teste.php">teste</a>
        
    </form>

</body>


</html>