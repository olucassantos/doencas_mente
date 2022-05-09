<?php 
    $titulo     = $_GET['titulo'];
    $descricao  = $_GET['descricao'];
    $cid        = $_GET['cid'];

    $pdo = new PDO('mysql:host=localhost;dbname=doencasmente;charset=utf8', 'root', '');
    $sql = "INSERT INTO doencas (titulo, descricao, cid) VALUES (?, ?, ?)"; // Bind Params
    $res = $pdo->prepare($sql);

    $res = $res->execute([$titulo, $descricao, $cid]);

    print_r($res);
?>