<?php

    switch ($_REQUEST["acao"]){
        case "editar":
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $cep = $_POST["cep"];
        $cpf = $_POST["cpf"];
        $numero = $_POST["numero"];

        $sql = "UPDATE clientes SET nome='{$nome}' , email='{$email}',
                                    cep='{$cep}', cpf='{$cpf}', numero='{$numero}' WHERE id=".$_REQUEST["id"];

        $res = $conn->query($sql);
        
        if($res==true){
            echo "Incricao editada com sucesso";
            print"<script>location.href='?page=listar';</script>";
        }
        else{
            echo "Erro ao editar a inscricao";
            print"<script>location.href='?page=listar';</script>";
        }
        break;

        case "excluir":
            $sql = "DELETE FROM clientes WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            if($res==true){
                echo "Incricao excluida com sucesso";
                print"<script>location.href='?page=listar';</script>";
            }
            else{
                echo "Erro ao excluida a inscricao";
                print"<script>location.href='?page=listar';</script>";
            }
            break;

    }


?>