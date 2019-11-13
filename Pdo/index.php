<?php

$dns = 'mysql:host=localhost;port=3306;dbname=php-cursos;charset=utf8';
$usuario = 'root';
$senha = '';

$opcoes = [
    PDO::ATTR_PERSISTENT => true
];

try {
    $pdo = new PDO($dns, $usuario, $senha, $opcoes);
} catch (PDOException $e) {
    exit('Erro: ' . $e->getMessage());
}

$funcionarios = $pdo->query('SELECT id, nome, email FROM funcionario');

?>

<table border="1">
    <tr>
        <td>Id</td>
        <td>Nome</td>
        <td>E-mail</td>
    </tr>
    <?php while ($func = $funcionarios->fetchObject()) : ?>
    <tr>
        <td><?= $func->id; ?></td>
        <td><?= $func->nome; ?></td>
        <td><?= $func->email; ?></td>
    </tr>
    <?php endwhile ?>
</table>