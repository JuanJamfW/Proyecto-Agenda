<?php
$id = $_POST['id'];

include("dbconfig.php");
$link = Conectarse();

$result = mysql_query("DELETE FROM tareas WHERE id='$id'", $link);

?>
<html>
<h1>Tarea Eliminada</h1>
<form action="index.php">
    <input type="submit" value="Volver">
</form>
</html>
