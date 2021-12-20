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
        include_once("showFounders.php");    
    ?>

<form action="updateFounders.php" method="post">
        <label>ІД рядка який змінюємо</label><input name="id" type="text"><br>
        <label>Нове ім'я засновника</label><input name="f_name" type="text"><br>
        <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>