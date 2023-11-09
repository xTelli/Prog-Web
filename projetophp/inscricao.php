<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
       body {
    font-family: Arial, sans-serif;
    background-color: #1b1a1e;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.caixa-inscricao {
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 30px;
    width: 300px;
    text-align: center;
}

label {
    display: block;
    margin: 10px 0;
}

input {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 3px;
}

button {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #0056b3;
}
    </style>
</head>
<body>
<br><br><br><br>
<div class="caixa-inscricao">
    <form action="?pg=processar_inscricao" method="post">
            <label for="nome">Digite seu Nome:</label>
            <input type="text" name="nome" required>
            <br>
            <label for="email">Digite seu E-mail:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="senha">Sua Senha:</label>
            <input type="password" id="senha" name="senha" required>
            <br>
            <label for="cidade">Cidade:</label>
            <input type="text" id="cidade" name="cidade">
            <br>
            <label for="estado">Estado:</label>
            <select id="estado" name="estado">
                <option value="ac">Acre</option>
                <option value="al">Alagoas</option>
                <option value="ap">Amapá</option>
                <option value="am">Amazonas</option>
                <option value="ba">Bahia</option>
                <option value="ce">Ceará</option>
                <option value="es">Espírito Santo</option>
                <option value="go">Goiás</option>
                <option value="ma">Maranhão</option>
                <option value="mt">Mato Grosso</option>
                <option value="ms">Mato Grosso do Sul</option>
                <option value="mg">Minas Gerais</option>
                <option value="pa">Pará</option>
                <option value="pb">Paraíba</option>
                <option value="pr">Paraná</option>
                <option value="pe">Pernambuco</option>
                <option value="pi">Piauí</option>
                <option value="rj">Rio de Janeiro</option>
                <option value="rn">Rio Grande do Norte</option>
                <option value="rs">Rio Grande do Sul</option>
                <option value="ro">Rondônia</option>
                <option value="rr">Roraima</option>
                <option value="sc">Santa Catarina</option>
                <option value="sp">São Paulo</option>
                <option value="se">Sergipe</option>
                <option value="to">Tocantins</option>
                <option value="df">Distrito Federal</option>
    
    </select>
    
            <label for="termos"><a href="?pg=termos_condicao" target="_blank" rel="external">Aceito os Termos e Condições:</a></label>
            <input type="checkbox" id="termos" name="termos" required>
    
            <button type="submit">Inscrever-se</button>
        </form>
</div>
</body>
</html>