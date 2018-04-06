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
class MyBD extends SQLite3
{
    function __construct()
    {
        $this->open('Task.db');
    }
}

$bd = new MyBD();
if(!$bd){
    echo $bd->lastErrorMsg();
} else {}

$ret = $bd->query("SELECT * FROM tareas");
while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
    if ($row['prioridad'] == "Alta"){
        $back = "red";
    } elseif ($row['prioridad'] == "Media"){
        $back = "green";
    } else {
        $back = "blue";
    }

    echo "<table border='1px solid black' bgcolor='$back'>";
    echo "<tr>";
    echo "<th>Descripcion</th>";
    echo "<th>Fecha</th>";
    echo "<th>Marcar como completada</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>";
    echo $row['descripcion']."<br>";
    echo "</td>";
    echo "<td>";
    echo $row['fecha']."<br>";
    echo "</td>";
    echo "<td>";
    echo "<form action='BorrarTarea.php' method='post'>";
    echo "<input type='submit' value=".$row['id']." name='id'>";
    echo "</form>";
    echo "</td>";
    echo "</tr>";
    echo "</table>";
}
$bd->close();
?>
