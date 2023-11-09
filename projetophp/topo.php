<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Fest</title>
    <link rel="icon" href="./assets/favicon (1).ico" type="image/x-icon">

  <style>
    body {
      background-color: #1b1a1e; 
      margin: 0; 
    }

    .barra-topo {
      background-color: #333;
      height: 50px;
      width: 100%;
      position: fixed;
      top: 0;
      left: 0;
      z-index: 100;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-radius: 0 0 10px 10px; 
    }

    .barra-topo .menu {
      list-style: none;
      display: flex;
      margin: 0;
      padding: 0;
      margin-left: auto;
    }

    .barra-topo .menu li {
      margin-right: 20px;
    }

    .barra-topo .busca {
      flex: 0.3;
    }

    .barra-topo .busca input {
      width: 100%;
      height: 30px;
      border: none;
      border-radius: 0 0 5px 5px;
      padding: 10px;
      font-size: 12px;
      outline: none;
      cursor: pointer;
      background-color: #333;
      color: #fff;
    }

    .barra-topo .busca input:focus {
      background-color: #ccc;
    }

    .barra-topo .menu a {
      color: #fff;
      text-decoration: none;
    }
  </style>  
</head>
<body>
<div>
   <!-- <h3><a href="?pg=palestrantes">Palestrantes</a></h3>
    <h3><a href="?pg=organizadores">Organizadores</a></h3>
    <h3><a href="?pg=patrocinadores">Patrocinadores </a></h3>-->

  <nav class="barra-topo">
   <!-- <div class="busca">
      <form action="#">
        <input type="text" placeholder="Pesquisar"
          onkeypress="if (event.keyCode == 13) { event.preventDefault(); submitForm(); }">
      </form>
    </div>-->
    <ul class="menu">
      <li><a href="?pg=inscricao">Inscreva-se</a>
      <li><a href="?pg=palestrantes">Palestrantes</a>     
      <li><a href="?pg=patrocinadores">Patrocinadores </a>
    </ul>
  </nav>

</div>
</body>
</html>
