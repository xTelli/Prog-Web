<!doctype html>
<html lang="pt-br">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Admin</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="dashboard.php">Admin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            
            <li class="nav-item">
            <a class="nav-link" href="?page=listar">Listar Inscritos</a>
            </li>
            
            
        </ul>
        </div>
    </div>
    </nav>

      <div class="container">
        <div class="row">
          <div class="col mt-5">
            <?php

              include("config.php");

              switch(@$_REQUEST["page"]){
                  case "listar":
                    include("listar_inscricoes.php");
                  break;
                  case "editar":
                    include("editar_cadastro.php");
                  break;
                  case "salvar":
                    include("salvar.php");
                  break;
                  default:
                      print "<h1>Seja bem-vindo ao painel de controle do ADM!</h1>";


                
            }


            ?>


        </div>



      </div>



    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>