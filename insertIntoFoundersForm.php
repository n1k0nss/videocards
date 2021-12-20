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
        include_once("showFounders.php")    
    ?>

    <form action="insertIntoFounders.php" method="post">
        <label>Ім'я засновника</label><input name="f_name" type="text"><br>
        <input type="submit" value="Вставити рядок">
    </form>

</body>
</html>
