<?php

include_once('db.php');


$Name = $_POST['Name']; $manuf = $_POST['manuf'];

$sql = "INSERT INTO graphics_chips (Name, Manufacturer_id) VALUES ('$Name', '$manuf' )";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


include_once("showGraphChips.php");

?>
