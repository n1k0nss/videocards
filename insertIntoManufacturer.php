<?php

include_once('db.php');


$manuf_name = $_POST['manuf_name']; $f_id = $_POST['f_id'];

$sql = "INSERT INTO manufacturer (manufacturer_name, Founder_id) VALUES ('$manuf_name', '$f_id' )";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


include_once("showManufacturer.php");

?>
