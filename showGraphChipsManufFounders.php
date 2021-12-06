<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця graphics_chips</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header class="header">
        <div class="container">
            <ul class="nav-list">
                <a href="./index.html"><img width="160" height="80" src="./logon1k.png" alt="logo"></a>
                <li class="nav-list__item"><a class="nav-list__link" href="showGraphChips.php">Таблиця graphics_chips</a><br></li>
                <li class="nav-list__item"><a class="nav-list__link" href="showManufacturer.php">Таблиця manufacturer</a><br></li>
                <li class="nav-list__item"><a class="nav-list__link" href="showFounders.php">Таблиця founders</a><br></li>
                <li class="nav-list__item"><a class="nav-list__link" href="index.html">На головну</a><br></li>
            </ul>
        </div>
        
    </header>
    <h1>Таблиця graphics_chips</h1>


    <?php

    include_once('db.php');

    $sql = 'SELECT gc.Name, m.manufacturer_name, f.founders_name FROM graphics_chips AS gc LEFT JOIN manufacturer AS m ON gc.manufacturer_id = m.id INNER JOIN founders AS f ON m.Founder_id = f.id ORDER BY gc.Name';


    if($result = $mysqli->query($sql)) {

        printf("<h3>Звіт - Список відеокарт, виробників і засновників: </h3><br>");   
        printf("<table><tr><th>Назва відеокарти</th><th>Назва виробника</th><th>Засновник</th></tr>");   
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['Name'], $row['manufacturer_name'], $row['founders_name']);
        };
        printf("</table>");
        
        $result->close();
    }

    $mysqli->close();
    ?>


    
</body>
</html>
