<?php
include('php/DB.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1 ES TRUE PORQUE A PHP LE DA LA PUTA GANA
    // Y 0 NO APARECE CUANDO HAGO ECHO PORQUE FUCK IT
    header("Location:index.php?login=1");
}
?>