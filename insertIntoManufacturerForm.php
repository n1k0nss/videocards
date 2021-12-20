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
        include_once("showManufacturer.php")    
    ?>

    <form action="insertIntoManufacturer.php" method="post">
        <label>Назва виробника</label><input name="manuf_name" type="text"><br>
        <label>ІД засновника</label><input name="f_id" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
