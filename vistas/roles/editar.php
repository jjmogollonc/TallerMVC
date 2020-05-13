<?php
	require_once '../../modelos/Rol.php';
	$rol = Rol::obtenerPorId(base64_decode($_GET['id']));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>editar</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/estilos.css">

</head>

<body>
    <header>
        <div class="ancho">
            <div class="logo">
                <p><a href="index.php">TallerMVC</a></p>

            </div>
            <nav>
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>

            </nav>
        </div>
    </header>
    <div class="container-fluid">
        <h1>Editar</h1>
    </div>
    </br>
    <div class="container">
           <form action="../../controladores/Roles.php" method="post">
            <div class="form-group">
                <input type="hidden" name="id" value="<?= $_GET['id'] ?>" />
                <input name="nombre" placeholder="Nombre" value="<?= $rol[1] ?>" required autofocus />
            </div>
            <button input name="a" type="submit" value="Editar" type="button" class="btn btn-primary">
                Editar
            </button>
        </form>


    </div>

</body>

</html>