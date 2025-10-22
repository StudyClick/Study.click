<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php

include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome  = $_POST['nome'];
    $data_nascimento = $_POST['data_nascimento'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO tbusuarios VALUES (NULL, '$nome', '$data_nascimento', '$email', '$senha')";

    if (mysqli_query($conexao, $sql)) {
        // echo "Cadastro realizado com sucesso!"; 
        header ("location:login.php?msg=Usuário cadastrado");
    } else {
        echo "Erro"  . mysqli_error($conexao);
    }

    mysqli_close($conexao);
}
?>