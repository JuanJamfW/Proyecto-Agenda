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
<div class="titulo"><h1>Lista de tareas a realizar</h1></div>
<div class="subtitulo"><h2>Añadir nueva tarea</h2></div>
    <div class="tarea">
        <form action="" method="post">

            <div class="descripcion">Descripcion:
                <br>
                <input type="text" name="description" >
            </div>
            <br>
            <div class="fecha">
                Fecha limite(dia/mes/año):
                <br>
                <input type="date" name="date" >
            </div>
            <br>
            <div class="prioridad">
                <label for="pr">Prioridad</label> <br/>
                <select id="pr" name="pr">
                    <option value="" selected="selected">- selecciona -</option>
                    <option value="Alta">Alta</option>
                    <option value="Media">Media</option>
                    <option value="Baja">Baja</option>
                </select>
            </div>
            <br>
                <div class="boton">
                <input type="submit" value="Guardar">
            </div>
        </form>
    </div>
<br>
</body>
</html>

<?php

$query = $db->query("SELECT * FROM tareas");
if($query->num_rows > 0){
    while($row = $query->fetch_assoc()) {
        if ($row['prioridad'] == "Alta") {
            $back = "red";
        } elseif ($row['prioridad'] == "Media") {
            $back = "green";
        } else {
            $back = "blue";
        }
    }
}
?>
<table border='1px solid black' bgcolor='$back'>;
    <tr>
        <th>Descripcion</th>
        <th>Fecha</th>
        <th>Marcar como completada</th>
    </tr>
    <tr>
        <td>
            <?php $row['descripcion'] ?>
            <br>
        </td>
        <td>
            <?php $row['fecha'] ?>
            <br>
        </td>
        <td>
            <form action='BorrarTarea.php' method='post'>
            <input type='submit' value="<?php $row['id']?>" name='id'>
            </form>
        </td>
    </tr>
</table>
<?php
$db->close();
?>
