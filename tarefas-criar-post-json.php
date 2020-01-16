<?php

require_once 'global.php';

try {
    // Takes raw data from the request
    $json = file_get_contents('php://input');
    // Converts it into a PHP object
    $jsonPayload = json_decode($json);

    $tarefa = new Tarefa();
    $nome = $jsonPayload->nome;
    $data = $jsonPayload->data;

    $tarefa->descricao = $nome;
    $tarefa->data = $data;
    $tarefa->status = 0;

    $tarefa->inserir();

    header('Content-Type: application/json');
    echo json_encode($jsonPayload);
} catch (Exception $e) {
    header('Content-Type: application/json');
    echo json_encode($e);
}
