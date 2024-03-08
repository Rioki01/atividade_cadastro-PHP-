<?php

require_once "../../validador_acesso.php";
?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>Chamado Real</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-home {
        padding: 80px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

  <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="../../logo.png" width="80" height="80" class="d-inline-block align-top" alt="">
          Chamado Real
      </a>

        <span class="navbar-text">
          <a class="nav-link" href="../../logoff.php" style="color:beige;">SAIR</a>
        </span>

    </div>
  </nav>

    <div class="container">    
      <div class="row">

        <div class="card-home">
          <div class="card">
            <div class="card-header">
              Menu
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6 d-flex justify-content-center">
                  <a href="adicionar_aluno.php" style='display:flex; flex-direction:column; justify-content:center; align-items:center; gap:5px; text-decoration:none; font-weight:600; font-size:18px;'>
                    <img src="../../formulario_abrir_chamado.png" width="100" height="100">
                    Adicionar Aluno
                  </a>
                </div>
                <div class="col-6 d-flex justify-content-center">
                  <a href="consultar_aluno.php" style='display:flex; flex-direction:column; justify-content:center; align-items:center; gap:5px; text-decoration:none; font-weight:600; font-size:18px;'>
                    <img src="../../formulario_consultar_chamado.png" width="100" height="100">
                    Alunos Adicionados
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>
