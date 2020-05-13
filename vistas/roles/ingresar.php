<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>añadir</title>
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
        <h1>Añadir</h1>
    </div>
    </br>
    <div class="container">
        <form action="../../controladores/Roles.php" method="post">
            <div class="form-group">
                <input name="nombre" placeholder="Nombre" required autofocus />
            </div>
            <button input name="a" type="submit" value="Ingresar" type="button" class="btn btn-success">
                Añadir
            </button>
            <button type="button" class="btn btn-warning"><a href="index.php">
                    Volver</a>
            </button>

        </form>
    </div>
</body>

</html>