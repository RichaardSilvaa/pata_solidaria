<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="style2.css">
    <title>Login</title>
</head>
<body>
    <div class="container">
    <center>
<img src="logosems.png" alt="logo" width="65%">
</center>
        <h2>Faça o Login:</h2> <br>
        <form action="validar.php" method="POST">
            
            <label for="iemail">Email</label> 
            <input type="email" name="email" id="iemail" required> <br>
            
            <label for="isenha">Senha</label>
            <input type="password" name="senha" id="isenha" required> <br>
            
            <input type="submit">
        </form>
    </div>
</body>
</html>