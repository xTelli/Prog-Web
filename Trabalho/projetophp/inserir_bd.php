<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techfest</title>
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <section class="header">
        <nav>
            <a href="home.html"><img src="assets/logo-icone-branco.png"></a>
            <div class="opnav">
                <ul>
                    <li><a href="inscricao.html">Inscreva-se</a></li>
                    <li><a href="palestrantes.html">Palestrantes</a></li>
                </ul>
            </div>
        </nav>
        <body> <section class="palestrantes-icons">
            <div class="palestrante">
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "techfest";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Conexão falhou: " . $conn->connect_error);
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $nome = $_POST["nome"];
                    $email = $_POST["email"];
                    $cep = $_POST["cep"];
                    $telefone = $_POST["telefone"];
                    $cpf = $_POST["cpf"];
                    $senha = password_hash($_POST["senha"], PASSWORD_DEFAULT);

                    $sql = "INSERT INTO clientes (nome, email, cep, numero, cpf, senha) VALUES ('$nome', '$email', '$cep', '$telefone', '$cpf', '$senha')";
                    
                    echo '<div class="mensagem-sucesso">';
                    echo '<p style="font-size: 20px; font-weight: bold;">Obrigado pela sua inscrição, ' . $nome . '!</p>';
                    echo '</div>';                    
                    if ($conn->query($sql) === TRUE) {
                        $last_id = $conn->insert_id;
            
                        echo '<div class="mensagem-sucesso">';
                        echo '<p style="font-size: 18px;">Sua inscrição foi realizada com sucesso. Seu número de inscrição é: <span style="color: #0099ff;">' . $last_id . '</span>, apresente esse código na entrada do evento.</p><br>';
                        echo '<p style="font-size: 14px;">Caso deseje fazer alguma alteração nos dados fornecidos, entre em contato com o email: contatotechfest@gmail.com.</p>';
                        echo '</div>';
                        
                        
                    } else {
                        echo "Erro ao realizar a inscrição: " . $conn->error;
                    }
                    
                }
                $conn->close();
        ?>
            </div>
    </section>
</body>
    </section>

    <section class="footer">
        <footer>
            <img class="logof" src="assets/logo.png">
            <div class="opfoot">
                <ul>
                <li><a class="#" href="sobrenos.html">Sobre Nós</a></li>
                </ul>
            </div>
            <div class="infos">
                <p>E-mail: contatotechfest@gmail.com</p>
                <p>Endereço: BR-230 - Água Fria, João Pessoa - PB, 58053-000</p>
            </div>
            <h3>Siga-nos Nas Redes Sociais:</h3>
            <div class="redes">
                <a href="#" class="icones"><img class="twitter" src="https://cdn-icons-png.flaticon.com/512/124/124021.png" alt="Twitter"></a>
                <a href="#" class="icones"><img class="instagram" src="https://img.freepik.com/vetores-premium/icone-do-instagram-de-logotipo-de-distintivo-moderno_578229-124.jpg" alt="Instagram"></a>
                <a href="#" class="icones"><img class="youtube" src="https://img.freepik.com/vetores-premium/logo-vermelho-do-youtube-logo-de-midia-social_197792-1803.jpg" alt="YouTube"></a>
            </div>
        </footer>
    </section>
</body>
</html>
