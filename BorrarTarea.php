<?php
$id = $_POST['id'];
include 'dbConfig.php';

if(!$db){
    echo $db->lastErrorMsg();
} else {
    $query = $db->query("DELETE FROM tareas WHERE id='$id'");
}
?>
<html>
<h1>Tarea Eliminada</h1>
<form action="index.php">
    <input type="submit" value="Volver">
</form>
</html>