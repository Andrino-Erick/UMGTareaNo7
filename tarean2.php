<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo No. 7</title>

    <link rel="stylesheet" href="assets/style/sytle.css">


</head>

<body>

    <!--Inicio del Header-->
    <header class="header">
        <nav class="menu">
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="tarean1.php">Tarea No. 1</a></li>
                <li><a href="tarean2.php">Tarea No. 2</a></li>
                <li><a href="tarean3.php">Tarea No. 3</a></li>
            </ul>
        </nav>
    </header>
    <!--Fin del Header-->

    <!--Inicio Contenido-->
    <main class="main-container">

        <section class="container-tarea2">
            <h3>Puedes Ingresar, Editar o Eliminar los Datos del DOM</h3>
            <div class="tarea-container">
                <ol id="list">
                    <li>Parcial II</li>
                    <li>Desarrollo Web</li>
                    <li>Ejercicio Práctico</li>
                    <li>Trabjando con DOM</li>
                </ol>
            </div>
            <div class="tarea-buttons">
                <input type="button" class="button " id="boton" value="Agregar" onclick="agregar();">
                <input type="button" class="button " id="modificar" value="Editar" onclick="editado();">
                <Button class="button">Eliminar</Button>
            </div>
        </section>

        <!--Inicio sección Tabla de datos-->
    </main>
    <!--Fin Contenido-->
    <script type="text/javascript" src="assets/js/tarea2.js"></script>
</body>

</html>