<?php

include_once('db.php');



$id = $_POST['id'];
$manuf_name = $_POST['manuf_name'];
$f_id = $_POST['f_id'];

$sql = "UPDATE manufacturer SET manufacturer_name='$manuf_name', Founder_id='$f_id' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }




include_once("showManufacturer.php");
?>
