<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" href="style.css">
    <title>Sistema de Depósito</title>
</head>
<body>
    <img src="" alt="">
    <h2>Depósito</h2> 
    <form method="post" action="../../control/cadastrarProduto.php"  >
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br> <br>
        
        <label for="descricao">Descricao:</label>
        <input type="text" id="descricao" name="descricao" required><br><br>
        
        <label for="quantidade">Quantidade:</label>
        <input type="number" id="quantidade" name="quantidade" pattern="[0-9]*" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
