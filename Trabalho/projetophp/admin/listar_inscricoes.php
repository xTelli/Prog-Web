<h1>Listar inscritos</h1>


<?php

include("config.php");

$sql = "SELECT * FROM clientes";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if($qtd > 0){

    print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>N de inscricao</th>" ;
        print "<th>Nome</th>" ;
        print "<th>Email</th>" ;
        print "<th>CEP</th>" ;
        print "<th>CPF</th>" ;
        print "<th>NUMERO</th>" ;
        print "<th>Modificacoes</th>" ;
        print "</tr>";
    while($row = $res->fetch_object()){
        print "<tr>";
        print "<td>" . $row->id . "</td>" ;
        print "<td>" . $row->nome . "</td>" ;
        print "<td>" . $row->email . "</td>" ;
        print "<td>" . $row->cep . "</td>" ;
        print "<td>" . $row->cpf . "</td>" ;
        print "<td>" . $row->numero . "</td>" ;

        print "<td>
                    <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                    
                    
                    <button <button onclick=\"if(confirm('Confirme a exclusão da inscricao selecionada')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false}\"class='btn btn-danger'>Excluir</button>
        
                
                </td>" ;
        print "</tr>";
        
            

    }
    print "</table>";
}
else {
    echo"Nao foi econtrado resultados";
}





