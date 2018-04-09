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
        <form action="AñadirTarea.php" method="post">

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
include("dbconfig.php");
$link = Conectarse();

$result = mysql_query("SELECT * FROM tareas", $link);

echo "<table>";
echo "<tr>";
echo "<th>Descripcion</th>";
echo "<th>Fecha</th>";
echo "<th>Prioridad</th>";
echo "</tr>";
while ($row = mysql_fetch_row($result)){
    echo "<tr>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "</tr>";
}
echo "</table>";
?>
