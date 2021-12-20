<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця founders</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <ul class="nav-list">
                <a href="./index.html"><img width="160" height="80" src="./logon1k.png" alt="logo"></a>
                <li class="nav-list__item"><a class="nav-list__link" href="insertIntoFoundersForm.php">Вставити рядок</a><br></li>
                <li class="nav-list__item"><a class="nav-list__link" href="updateFoundersForm.php">Змінити рядок</a><br></li>
                <li class="nav-list__item"><a class="nav-list__link" href="deleteFromFoundersForm.php">Видалити рядок</a><br></li>
                <li class="nav-list__item"><a class="nav-list__link" href="index.html">На головну</a><br></li>
            </ul>
        </div>
        
    </header>
        <h1>Таблиця founders</h1>


    <?php

    include_once('db.php');

    $sql = 'SELECT * FROM founders';


    if($result = $mysqli->query($sql)) {  

        printf("Список засновників: <br><br>");   
        printf("<table><tr><th>ІД засновника</th><th>ПІБ</th></tr>");   
        while( $row = $result->fetch_assoc() ){ 
            printf("<tr><td>%s</td><td>%s</td></tr>", $row['id'], $row['founders_name']); 
        };
        printf("</table>");
        
        $result->close();
    };

    
    $mysqli->close();
    ?>


    
</body>
</html>
