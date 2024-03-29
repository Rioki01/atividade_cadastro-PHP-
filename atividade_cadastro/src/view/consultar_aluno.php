<?php
require_once "../../validador_acesso.php";
require_once "../view/Classes.php";


  $cadastroAlunos = new CadastroAlunos();

  // le o arquivo de alunos, e entao retorna na proxima função todos os alunos
  $cadastroAlunos->lerArquivo('../../arquivo.txt');
  //aparentemente um erro no VS, pois o array retorna vazio.
  $alunos = $cadastroAlunos->listarAlunos();

?>

<html>
  <head>
    <meta charset="utf-8" />
    <title> Chamado Real - Consulta</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
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

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">

              <?php foreach($alunos as $aluno) { ?>
                  <div class="card mb-3 bg-light">
                      <div class="card-body">
                          <h5 class="card-title"><?= $aluno->getNome() ?></h5>
                          <h6 class="card-subtitle mb-2 text-muted"><?= $aluno->getMatricula() ?></h6>
                          <p class="card-text"><?= $aluno->getCurso() ?></p>
                      </div>
                  </div>
              <?php } ?>

              <div class="row mt-5">
                <div class="col-6">
                  <a class="btn btn-lg btn-info btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>