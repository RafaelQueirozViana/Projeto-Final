<?php

if (isset($_POST["entrar"]) && !empty($_POST['cpf']) && !empty($_POST['senha'])) {

    include_once('../BD/conexao.php');

    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM cadastro WHERE cpf = '$cpf' AND senha = '$senha' ";

    $result = $conexao ->query($sql);
}
if (mysqli_num_rows($result) < 1) {
    
    header('Location:../LoginPage/index.php');
}
else {
    header('Location: ../TelaInicial/index.html');
}










?>