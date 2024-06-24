<?php
include_once "../model/conn.php";
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores do formulário
    $nome = htmlspecialchars(filter_input(INPUT_POST,"nome",FILTER_SANITIZE_FULL_SPECIAL_CHARS));
    $email = htmlspecialchars(filter_input(INPUT_POST,"email",FILTER_SANITIZE_SPECIAL_CHARS));
    $senha = htmlspecialchars(filter_input(INPUT_POST,"senha",FILTER_SANITIZE_SPECIAL_CHARS));
    $perfil = htmlspecialchars(filter_input(INPUT_POST,"perfil",FILTER_SANITIZE_SPECIAL_CHARS));

    $senha_cri = password_hash($senha, PASSWORD_DEFAULT);
    echo $nome, $email, $senha_cri, $perfil;

    $sql = "insert into usuarios (nome,email,senha,perfil) values ('$nome','$email','$senha_cri','$perfil');";
    $consulta = mysqli_query($conn, $sql);

    if ($consulta){
        echo "cadastrado com sucesso ";
    }
    else {
        echo "erro ao cadastrar" . mysqli_error($conn);
    }
 
}

?>