<?php

require_once '../modelo/BancoDeDados.php';
require_once '../modelo/Funcionario.php';

$funcionario = new Funcionario();

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $id = $_POST['id'];
    $departamento = $_POST['departamento'];
    $cpf = $_POST['cpf'];
    $solicitado = $_POST['solicitado'];
    $atribuido = $_POST['atribuido'];
    $entrada = $_POST['entrada'];
    $saida = $_POST['saida'];
    $descricao = $_POST['descricao'];
    $data = $_POST['data'];

    $funcionario->alteraFuncionario($id, $departamento, $cpf, $solicitado, $atribuido, $entrada, $saida, $descricao, $data);
    $funcionario->mostraPaginaLista();
    
} else if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    $id = $_GET["id"];
    $funcionario->mostraPaginaAlteracao($id);
}


