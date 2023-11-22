<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso restrito</title>
</head>
<style>
    img {
        width: 120px;
        border-radius: 10px;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
        background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url(https://cdn.folhape.com.br/upload/dn_arquivo/2017/01/campus-party-1-1159274338jpg.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
    }

    div {
        background-color: #1d1d1d;
        padding: 40px 60px;
        border-radius: 15px;
        color: #fff;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    input {
        padding: 5px; 
        outline: none;
        font-size: 15px;
        background-color: transparent;
        border: none;
        border-bottom: solid 1px rgb(0, 153, 255);
        margin-bottom: 15px;
        color: #fff;
    }

    input::placeholder {
        color: #fff;
    }

    button {
        background-color: rgb(0, 153, 255);
        border: none;
        padding: 15px;
        width: 100%;
        border-radius: 10px;
        font-size: 15px;
        color: white;
        transition: 0.3s ease-in-out all;
        cursor: pointer;
    }

    button:hover {
        background-color: rgb(0, 60, 255);
    }
</style>
<body>
    <div id="Login"> 
        <h1>Acesso restrito</h1>
        <form action="login.php" method="POST">
            <input type="email" name="usuario" placeholder="Seu E-mail" required>
            <input type="password" name="senha" placeholder="Sua Senha" required>
            <button type="submit" name="submit">Entrar</button>
        </form>
    </div>
</body>
</html>
