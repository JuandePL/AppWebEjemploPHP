<?php
include("../DB.php");

// Login Handler
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        // Buscar en DB si el usuario existe
        $userExists = DB::fetchUser(
            "SELECT username FROM usuario WHERE username=? AND password=?",
            array($_POST["username"],  $_POST["password"])
        );

        // Devolver login 1 (true) o 0 (false) dependiendo de si el usuario existe o no
        $login = $userExists ? true : false;
        header("Location:../../index.php?login=" . $login);
    } catch (Throwable $th) {
        echo "Error al hacer login: ". $th->getMessage();
    }
}
