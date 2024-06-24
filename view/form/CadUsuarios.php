<!DOCTYPE html>
<html>
<head>
    
    <link rel="stylesheet" href="style.css">
    <title>Sistema de Depósito</title>
</head>
<body>
    <img src="" alt="">
    <h2>Usuarios</h2> 
    <form method="post" action="../../control/cadastrarUsuarios.php"  >
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br> <br>
        
        <label for="email">email:</label>
        <input type="text" id="email" name="email" required><br><br>
        
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>

        <label for="perfil">perfil:</label>
        <input type="text" id="perfil" name="perfil" required><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>