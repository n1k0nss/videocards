<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця graphic_chips</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header class="header">
        <div class="container">
            <ul class="nav-list">
                <a href="./index.html"><img width="160" height="80" src="./logon1k.png" alt="logo"></a>
                <li class="nav-list__item"><a class="nav-list__link" href="insertIntoGraphChipsForm.php">Вставити рядок</a><br></li>
                <li class="nav-list__item"><a class="nav-list__link" href="updateGraphChipsForm.php">Змінити рядок</a><br></li>
                <li class="nav-list__item"><a class="nav-list__link" href="deleteFromGraphChipsForm.php">Видалити рядок</a><br></li>
                <li class="nav-list__item"><a class="nav-list__link" href="showGraphChipsManufFounders.php">Звіт Відеокарти - Виробник - Засновник</a><br></li>
                <li class="nav-list__item"><a class="nav-list__link" href="index.html">На головну</a><br></li>
            </ul>
        </div>
        
    </header>
    <h1>Таблиця graphics_chips</h1>


    <?php

    include_once('db.php');

    $sql = 'SELECT * FROM graphics_chips ORDER BY "Name"';


    /* Надсилаємо запит серверу */
    if($result = $mysqli->query($sql)) {   // $mysqli - наш об'єкт, через який здійснюємо підключення, query - метод, який дозволяє виконати довільний запит

        printf("Список відеокарт: <br><br>");   // <br> в html - розрив рядка
        printf("<table><tr><th>ІД</th><th>Назва відеокарти</th><th>ІД виробника</th></tr>");   // <br> в html - розрив рядка
        /* Вибірка результатів запиту  */
        while( $row = $result->fetch_assoc() ){ // fetch_assoc() повертає рядок із запиту у вигляді асоціативного масиву, наприклад $row = ['id'=>'1', 'pib'=>'Олександр', 'grupa'=>'ІПЗ-31']
            printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['id'], $row['Name'], $row['Manufacturer_id']); //виводимо результат на сторінку
        };
        printf("</table>");
        /*Звільняємо пам'ять*/
        $result->close();
    };

    /*Закриваємо з'єднання*/
    $mysqli->close();
    ?>


    
</body>
</html>
