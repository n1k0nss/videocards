<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця manufacturer</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header class="header">
        <div class="container">
            <ul class="nav-list">
                <a href="./index.html"><img width="160" height="80" src="./logon1k.png" alt="logo"></a>
                <li class="nav-list__item"><a class="nav-list__link" href="insertIntoManufacturerForm.php">Вставити рядок</a><br></li>
                <li class="nav-list__item"><a class="nav-list__link" href="updateManufacturerForm.php">Змінити рядок</a><br></li>
                <li class="nav-list__item"><a class="nav-list__link" href="deleteFromManufacturerForm.php">Видалити рядок</a><br></li>
                <li class="nav-list__item"><a class="nav-list__link" href="showManufGraphChipsCount.php">Звіт Кількість відеокарт виробника</a><br></li>
                <li class="nav-list__item"><a class="nav-list__link" href="index.html">На головну</a><br></li>
            </ul>
        </div>
        
    </header>
    <h1>Таблиця manufacturer</h1>


    <?php

    include_once('db.php');

    $sql = "SELECT * FROM manufacturer";


    if($result = $mysqli->query($sql))
    {   
        printf("Список виробників: <br><br>");   
        printf("<table><tr><th>ІД виробника</th><th>Назва виробника</th><th>ІД засновника</th></tr>");
        while( $row = $result->fetch_assoc() )
        {
            printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['manufacturer_name'], $row['Founder_id']);
        };
        printf("</table>");
        $result->close();
    };

    $mysqli->close();
    ?>


    
</body>
</html>
