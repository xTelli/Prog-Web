<?php 


include_once("../config.inc.php");


// pega as inf. da pag. web
$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$cep = $_REQUEST['cep'];
$cpf = $_REQUEST['cpf'];
$telefone = $_REQUEST['telefone'];
$senha = $_REQUEST['senha'];



//variavel que vai receber o conteudo
$sql = "INSERT INTO clientes (nome,email,cep,cpf,numero,senha)
        VALUES ('$nome','$email','$cep','$cpf','$telefone','$senha')";


//servidor,conteudo que quer adicionar
$inserir = mysqli_query($conn,$sql);


if ($inserir){
    echo "Inscricao feita consucesso! ";
}

else{
    echo "erro ao fazer a inscricao";
}

?>


