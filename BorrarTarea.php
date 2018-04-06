<?php
$id = $_POST['id'];

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
} else {
    $bd->query("DELETE FROM tareas WHERE id='$id'");
}
?>
?>
<html>
<h1>Tarea Eliminada</h1>
<form action="index.php">
    <input type="submit" value="Volver">
</form>
</html>