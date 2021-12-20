<?php

include_once('db.php');


$f_name = $_POST['f_name'];

$sql = "INSERT INTO founders (founders_name) VALUES ('$f_name')";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }


include_once("showFounders.php");

?>
