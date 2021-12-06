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
        include_once("showGraphChips.php");    
    ?>

<form action="updateGraphChips.php" method="post">
        <label>ІД рядка який змінюємо</label><input name="id" type="text"><br>
        <label>Нове значення назви відеокарти</label><input name="Name" type="text"><br>
        <label>Нове значення ІД виробника</label><input name="manuf" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>