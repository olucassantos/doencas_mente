<?php
    $pdo = new PDO('mysql:host=localhost;dbname=doencasmente;charset=utf8', 'root', '');
    $sql = "SELECT * FROM doencas"; // Bind Params
    $resposta = $pdo->prepare($sql);
    $resposta->execute();

    $dados = $resposta->fetchAll();

    foreach ($dados as $dado) {
        echo $dado['titulo'];
    }
?>