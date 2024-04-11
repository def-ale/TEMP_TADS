<?php

require_once "Database.php";
require_once "Aluno.php";

$db = new Database();

$con = $db->getConnection();

$sql = "SELECT id, nome, matricula FROM tads.alunos;";

$nome = "Florzinha";
$matricula = 123456;


$insertSql = "INSERT INTO tads.alunos {nome, matricula} VALUES {:nome, :matricula}";

$stmt = $con->prepare($insertSql);
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $matricula);

if ($stmt->execute()) {
    echo "Registro incluído!<br>";
}

$insertResult = $con->exec($insertSql);

var_dump($insertResult);

$alunos = $con->query($sql);

$alunos->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE,"Aluno");


echo "Quantidade de alunos: {$alunos->rowCount()}";

foreach ($alunos as $aluno) {
    $aluno->imprimeDados();
}
