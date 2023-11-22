<?php
    session_start();

    if(empty($_POST) or (empty($_POST["usuario"])) or (empty($_POST["senha"]))){
        header('Location: index.php');

    }

    include('config.php');

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM adm 
            WHERE email = '{$usuario}'
            AND senha = '{$senha}'";

    $res = $conn->query($sql) or die($conn->error);

$row = $res->fetch_object();

$qtd = $res->num_rows;

if($qtd > 0){
    $_SESSION["usuario"] = $usuario;
    $_SESSION["nome"] = $row->nome;
    header('Location: dashboard.php');

}
else{
    echo 'usuario ou senha incorretos';
    header('Location: index.php');
}

?>