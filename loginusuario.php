<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if (isset($_POST['usuario']) && isset($_POST['senha'])){
      include("conexao.php");

      $sql = "
      select from tbusuarios
      where usuario = '{$_POST['usuario']}'
      ";

      $resultado = mysqli_query($conexao,$sql);

      if(mysqli_num_rows($resultado) == 0){
        $erro = "usuario  não encontrado.";
          }else{
            $u = mysqli_fetch_assoc($resultado);

            if (!password_Verify($_POST['senha'],$u['senha'])){
              $erro = "Senha Incorreta";
            }
            if($u['ativo']== "N"){
              $erro = "Usuário inativo";
            }
          }
          if(isset($erro)){
            echo "
            <div class='alert alert-danger text-center'>
            $erro
            </div>
            ";
          }else{
          header("location:tela_inicial.php");
          }
    }



?>
</body>
</html>