<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Cadastrar Usuário</h1>
    <form method="POST" action="processa.php"> 
        <label>Nome:</label>
        <input type="text" name="nome">
    <br><br>
        <label>Email:</label>
        <input type="email" name="email">
    <br><br>
    <label>Senha:</label>
        <input type="password" name="senha">
    <br><br>
    <input type="submit" value="Cadastrar">
    </form>


    
</body>
</html>