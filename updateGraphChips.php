<?php

include_once('db.php');



$id = $_POST['id'];
$Name = $_POST['Name'];
$manuf = $_POST['manuf'];

$sql = "UPDATE graphics_chips SET Name='$Name', Manufacturer_id='$manuf' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }




include_once("showGraphChips.php");
?>
