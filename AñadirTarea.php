<?php
$description = $_POST['description'];
$date = $_POST['date'];
$prior = $_POST['pr'];
$counter_name = "counter.txt";

include 'dbConfig.php';

if (!file_exists($counter_name)) {
    $f = fopen($counter_name, "w");
    fwrite($f,"0");
    fclose($f);
}
$f = fopen($counter_name,"r");
$counterVal = fread($f, filesize($counter_name));

if(!$db){
    echo $db->lastErrorMsg();
} else {
    $db->query("INSERT INTO tareas VALUES ('$counterVal','$description','$date','$prior')");
}
$counterVal++;
$f = fopen($counter_name, "w");
fwrite($f, $counterVal);
fclose($f);
?>
<html>
<h1>Tarea añadadida</h1>
<form action="index.php">
    <input type="submit" value="Volver">
</form>
</html>