<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: #d1d0cd;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 50px;
            background-color: #333;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1, h3 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
        }
        textarea {
            width: 100%;
            height: 150px;
            padding: 10px;
            margin-bottom: 20px;
        }
        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
   
    </style>
</head>
<body>
<br><br>
<h1>Fale Conosco!</h1>
<h3>Este é um canal exclusivo para Comentários, Reclamações, Dúvidas e Sugestões relacionadas ao evento ou site.</h3>
<div class="container">   
        <h1>Deixe seu Feedback</h1>
        <form>
            <label for="tipo-feedback">Escolha o tipo de feedback:</label>
            <select id="tipo-feedback" name="tipo-feedback">
                <option value="comentario">Comentário</option>
                <option value="sugestao">Sugestão</option>
                <option value="reclamacao">Reclamação</option>
            </select>

            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" placeholder="Digite sua mensagem aqui"></textarea>

            <button type="submit">Enviar</button>
        </form>
    </div>
</body>
</html>