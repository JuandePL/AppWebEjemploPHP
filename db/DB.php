<?php
$envData = json_decode('./env.json');

$connectionString = "mysql:dbname=" . $envData['database'] . ";host=" . $envData['host'];
$user = $envData['username'];
$password = $envData['password'];

try {
    $db = new PDO($connectionString, $user, $password);
} catch (PDOException $e) {
    echo "Error en la conexion" . $e->getMessage();
}
