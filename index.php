<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All news</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <h1>AllNews.com</h1>
</header>

<div class="article-container">
    <?php

    require 'mySQLconnect.php';

    $selection = $mySQLconnect -> query('select * from noticias;')-> fetchAll();

    print_r($selection);

    ?>
</div>

</body>
</html>

