<?php require_once '../../modelos/Rol.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Inicio</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/estilos.css">

</head>

<body>
    <header>
        <div class="ancho">
            <div class="logo">
                <p><a href="index.php">Enundosportres</a></p>

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
        <h1>Listar</h1>
        <button type="button" class="btn btn-primary"><a href="ingresar.php">Ingresar nuevo</a></button>
    </div>
    </br>
    <div class="container">
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Borrar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach (Rol::listar() as $fila) { ?>
                <tr>
                    <td><?= $fila[0] ?></td>
                    <td><?= $fila[1] ?></td>
                    <td>
                        <button type="button" class="btn btn-warning btn-xs">
                            <a href="editar.php?id=<?=base64_encode($fila[0])?>"><h3>Editar</h3></a>
                        </button>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger btn-xs">
                            <a href="../../controladores/Roles.php?a=elim&id=<?=base64_encode($fila[0])?>"
                                onclick="return confirm('¿Desea eliminar?')"><h3>Eliminar</h3></button>
                    </td>
                </tr>
                <?php } ?>

            </tbody>
        </table>
	</div>

</body>

</html>