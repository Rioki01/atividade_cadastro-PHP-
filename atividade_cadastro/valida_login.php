<?php

session_start();
require_once "C:/xampp/htdocs/atividade_cadastro/src/controllers/LoginController.php";
$loginController = new LoginController();
//pega as variavies do Post no Index.php
$loginController->autenticar($_POST['email'], $_POST['senha']);

?>