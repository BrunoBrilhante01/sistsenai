<?php
include_once "../model/conn.php";
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores do formulário
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $quantidade = $_POST["quantidade"];

    echo $nome, $descricao, $quantidade;

    $sql = "insert into produtos (nome, descricao, quantidade_estoque) values ('$nome','$descricao','$quantidade')";
    $consulta = mysqli_query($conn, $sql);

    if ($consulta){
        echo "cadastrado com sucesso ";
    }
    else {
        echo "erro ao cadastrar" . mysqli_error($conn);
    }
 
}
?>