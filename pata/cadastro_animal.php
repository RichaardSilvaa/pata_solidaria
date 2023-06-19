<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="style3.css">
    <title>Informações do Animal</title>
</head>
<body>
    <div class="container">
    <center>
<img src="logosems.png" alt="logo" width="65%">
</center>
        <h2>Informações do Animal:</h2> <br>
        <form action="adicionar_animal.php" method="POST">
            
            <label for="ianome">Nome do Animalzinho*</label> 
            <input type="text" name="nomeA" id="ianome" required> <br>

            <label for="iaespecie">Espécie*</label> <br>
            <select name="especieA" id="iaespecie" required>
            <option value=""></option>
            <option value="C">Cachorro</option>
            <option value="G">Gato</option>
            </select>
            <br>
            <label for="iaidade">Idade*</label>
            <select name="idadeA" id="iaidade" required>
            <option value=""></option>
            <option value="F">Filhote</option>
            <option value="J">Jovem</option>
            <option value="A">Adulto</option>
            <option value="I">Idoso</option>
            </select>

            <label for="iaporte">Porte*</label>
            <select name="porteA" id="iaporte" required>
            <option value=""></option>
            <option value="P">Pequeno</option>
            <option value="M">Médio</option>
            <option value="G">Grande</option>
            </select>

            <label for="iasexo">Sexo*</label>
            <select name="sexoA" id="iasexo" required>
            <option value=""></option>
            <option value="F">Fêmea</option>
            <option value="M">Macho</option>
            </select>
            
            <input type="submit">
        </form>
    </div>
</body>
</html>