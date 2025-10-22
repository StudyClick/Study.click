

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tela Inicial</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #a464dc, #0d4cab );;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0,0,0,0.1);
            text-align: center;
            width: 300px;
        }
        h1 {
            font-size: 22px;
            margin-bottom: 20px;
        }
        a {
            display: block;
            margin: 10px 0;
            padding: 12px;
            text-decoration: none;
            background: #007BFF;
            color: white;
            border-radius: 5px;
            transition: 0.3s;
        }
        a:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Bem-vindo!</h1>
        <a href="login.php">Login</a>
        <a href="cadastro.php">Cadastro</a>
    </div>
</body>
</html>
