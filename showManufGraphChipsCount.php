<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Кількість відеокарт виробника</title>
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
    <h1>Кількість відеокарт виробника</h1>


    <?php

    include_once('db.php');

    $sql = 'SELECT m.manufacturer_name, COUNT(gc.Manufacturer_id) as "kilk_chips" FROM manufacturer AS m LEFT JOIN graphics_chips AS gc ON m.id = gc.manufacturer_id GROUP BY gc.manufacturer_id';


    if($result = $mysqli->query($sql)) {

        printf("<h3>Звіт - Кількість відеокарт виробника: </h3><br>");   
        printf("<table><tr><th>Назва виробника</th><th>Кількість відеокарт</th></tr>"); 
        while( $row = $result->fetch_assoc() ){
            printf("<tr><td>%s</td><td>%s</td></tr>", $row['manufacturer_name'], $row['kilk_chips']);
        };
        printf("</table>");
        $result->close();
    };

    $mysqli->close();
    ?>


    <br><br><br>

    <ul>
        <li><a href="showGraphChips.php">Таблиця graphics_chips</a><br></li>
        <li><a href="showManufacturer.php">Таблиця manufacturer</a><br></li>
        <li><a href="showFounders.php">Таблиця founders</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
