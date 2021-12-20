<?php

include_once('db.php');



$id = $_POST['id'];
$f_name = $_POST['f_name'];


$sql = "UPDATE founders SET founders_name='$f_name' WHERE id='$id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }




include_once("showFounders.php");
?>
