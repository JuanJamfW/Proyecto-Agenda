<?php
// Configuración de la base de datos
include 'dbConfig.php';
?>

<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <title>Lista de tareas</title>
    <link rel="stylesheet" href="estilo.css">

</head>

<body>
<h1>Lista de tareas a realizar</h1>
<h2>Añadir nueva tarea</h2>
    <form action="AddTask.php" method="post">
        Descripcion:
        <br>
        <input type="text" name="description" >
        <br>
        Fecha limite(dd/mm/yyyy):
        <br>
        <input type="date" name="date" >
        <br>
        <label for="pr">Prioridad</label> <br/>
        <select id="pr" name="pr">
            <option value="" selected="selected">- selecciona -</option>
            <option value="Alta">Alta</option>
            <option value="Media">Media</option>
            <option value="Baja">Baja</option>
        </select>
        <br>
        <input type="submit" value="Guardar">
    </form>
<br>
</body>
</html>
