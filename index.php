<?php
$pdo = new PDO('sqlite:sales.db');

$statement = $pdo->query('SELECT * FROM sales');

$rows = $statement->fetchAll(PDO::FETCH_ASSOC);
var_dump($rows);