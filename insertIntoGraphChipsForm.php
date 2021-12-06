<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <?php
        include_once("showGraphChips.php")    
    ?>

    <form action="insertIntoGraphChips.php" method="post">
        <label>Назва відеокарти</label><input name="Name" type="text"><br>
        <label>ІД виробника</label><input name="manuf" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
