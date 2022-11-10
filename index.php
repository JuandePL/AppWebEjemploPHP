<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    $title = 'Index';
    include('./php/templates/head.php');
    ?>
    <link href="./css/signin.css" rel="stylesheet">
</head>

<body class="text-center">
    <main class="form-signin w-100 m-auto">

        <?php
        // Correct session handler
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $isLogin = isset($_GET['login']) ? boolval($_GET['login']) : false;

            if ($isLogin) {
        ?>
                <div class="alert alert-success" role="alert">
                    Inicio de sesión correcto
                </div>
            <?php
            } else {
            ?>
                <div class="alert alert-danger" role="alert">
                    Error al iniciar sesión. <br> Las credenciales son incorrectas.
                </div>
        <?php
            }
        }
        ?>

        <form action="php/handlers/loginHandler.php" method="post">
            <img class="mb-4" src="https://i.pinimg.com/originals/3b/a6/c6/3ba6c62072b44f68baaca0faff4d2782.png" alt="BETI" height="75">
            <h1 class="h3 mb-3 fw-normal">Por favor, inicia sesión</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
                <label for="username">Nombre de usuario</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                <label for="password">Contraseña</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" class="check-betis" value="rememberMe"> Recordarme
                    <label for=""></label>
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-success btn-betis" type="submit">Iniciar sesión</button>
        </form>
    </main>
</body>

</html>