<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
    <center>
<img src="logosems.png" alt="logo" width="65%">
</center>
        <h2>Faça seu Cadastro:</h2> <br>
        <form action="processar_cadastro.php" method="POST">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
            
            <label for="inome">Nome Completo*</label> 
            <input type="text" name="nome" id="inome" required> <br>
            
            <label for="icpf">CPF*</label> 
            <input type="text" name="cpf" id="icpf" class="form-control" placeholder="000.000.000-00" required> <br>
            
            <label for="iemail">Email*</label> 
            <input type="email" name="email" id="iemail" required> <br>

            <label for="itel">Telefone*</label>
            <input type="tel" class="form-control" name="tel" id="itel" placeholder="(xx) xxxxx-xxxx" required>
            
            <script type="text/javascript">
            $("#icpf").mask("000.000.000-00")
            $("#itel").mask("(00) 00000-0000");
            </script>

            <label for="idatanasc">Data de Nascimento*</label>
            <input type="date" name="datanasc" id="idatanasc" required> <br>

            <label for="isenha">Senha*</label>
            <input type="password" name="senha" id="isenha" required> <br>

            <label>O que pretende fazer no site?</label> <br><br>
            
            <input type="checkbox" name="adotar" id="iadotar"> 
            <label for="iadotar">Quero adotar um animalzinho</label> <br>
            <input type="checkbox" name="anunciar" id="ianunciar"> 
            <label for="ianunciar">Quero anunciar um bichinho para adoção</label> <br><br>
            
            <input type="submit">
        </form>
    </div>
</body>
</html>