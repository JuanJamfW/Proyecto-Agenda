<?php
include("dbconfig.php");
$link = Conectarse();

$description = $_POST['description'];
$date = $_POST['date'];
$prior = $_POST['pr'];

$idmax = mysql_query("SELECT MAX(id) FROM tareas", $link);

while ($row = mysql_fetch_row($idmax)){
    $asignar = $row[0] + 1;
}

$result = mysql_query("INSERT INTO tareas VALUES ('$asignar','$description','$date','$prior')", $link);

?>
<html>
<h1>Tarea a&ntilde;adida</h1>
<form action="index.php">
    <input type="submit" value="Volver">
</form>
</html>
