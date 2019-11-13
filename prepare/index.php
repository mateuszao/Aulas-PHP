<?php

try {
    $pdo = new PDO('mysql:dbname=php-intermediario', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ]);
    
    $id = $_GET['id'];
    
    $stmt = $pdo->prepare('SELECT * FROM funcionarios WHERE id=:id');
    
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    //$stmt->bindValue(':nome', 'Pedro Marcos', PDO::PARAM_STR);
    
    $id = 5;
    
    $stmt->execute();
    
    $funcs = $stmt->fetchAll();
    
    var_dump($funcs);

} catch (PDOException $ex) {
    echo $ex->getMessage();
}