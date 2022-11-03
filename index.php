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
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if (isset($_GET['login'])) {
                $isLogin = boolval($_GET['login']);

                if ($isLogin) {
        ?>
                    <div class="alert alert-success" role="alert">
                        INICIO DE SESION COERRECTO A CHUPARLA EA PA LA VENTA DER NABO SHUPALAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA SIUUUUUUUUUUUUUUUU
                    </div>
                <?php
                } else {
                ?>
                    <div class="alert alert-danger" role="alert">
                        HAHAHAHSAHSHJAHSJAHSJASAHSJAHS QUE TONTO ERES IJO
                    </div>
        <?php
                }
            }
        }
        ?>
        <form action="loginHandler.php" method="post">
            <h1 class="h3 mb-3 fw-normal">Por favor, inicia sesión</h1>

            <div class="form-floating">
                <input type="text" class="form-control" id="username" placeholder="Nombre de usuario">
                <label for="username">Nombre de usuario</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Contraseña">
                <label for="password">Contraseña</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="rememberMe"> Recordarme
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar sesión</button>
        </form>
    </main>
</body>

</html>