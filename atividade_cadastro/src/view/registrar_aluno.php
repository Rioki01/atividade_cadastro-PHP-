<?php

session_start();
require_once "../../validador_acesso.php";
require_once "../view/Classes.php";

$matriculaExistente = false;
$arquivo = file('../../arquivo.txt');
foreach ($arquivo as $linha) {
    $dados = explode('#', $linha);
    if ($dados[1] == $_POST['matricula']) {
        $matriculaExistente = true;
        break;
    }
}

if ($matriculaExistente) {
    // caso a matricula ja existe, da um erro e informa o usuario
    header('Location: adicionar_aluno.php?erro=matricula_existente');
    exit;
} else {
    // Cria uma instância da classe aluno
    $aluno = new Aluno($_POST['nome'], $_POST['matricula'], $_POST['curso']);

    // cria instancias e apos adiciona o aluno ao cadastro
    $cadastroAlunos = new CadastroAlunos();
    $cadastroAlunos->cadastrarAluno($aluno);

    $arquivo = fopen('../../arquivo.txt', 'a');
    fwrite($arquivo, $aluno->getNome() . '#' . $aluno->getMatricula() . '#' . $aluno->getCurso() . PHP_EOL);
    fclose($arquivo);

    // Redireciona para home.php
    header('Location: home.php');
    exit;
}
?>