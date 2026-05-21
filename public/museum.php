<?php

require_once "script.php";

if (!isset($_GET['museum'])) {
    die("Музей не найден");
}

$museumCode = $_GET['museum'];

$museum = getMuseumByCode($conn, $museumCode);

if (!$museum) {
    die("Информация о музее не найдена");
}

?>

<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="UTF-8">

    <title><?= $museum['name'] ?></title>

    <link rel="icon" href="img/favicon.ico">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

<header class="bg-dark">

    <nav class="navbar navbar-expand-lg navbar-dark container">

        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="img/logo.png" width="40" class="me-2">
            Музеи мира
        </a>

        <div class="navbar-nav ms-auto">
            <a class="nav-link" href="index.php">Главная</a>
            <a class="nav-link" href="catalog.php">Каталог</a>
            <a class="nav-link" href="order.php">Экскурсия</a>
        </div>

    </nav>

</header>

<main class="container mt-5">

    <div class="row align-items-center">

        <div class="col-md-6">

            <img
                src="<?= $museum['image'] ?>"
                class="img-fluid rounded"
            >

        </div>

        <div class="col-md-6">

            <h2>
                <?= $museum['name'] ?>
            </h2>

            <p>
                <?= $museum['description'] ?>
            </p>

            <a href="order.php" class="btn btn-dark">
                Купить билет
            </a>

        </div>

    </div>

</main>

<footer class="bg-dark text-white text-center p-4 mt-5">
    <p>© 2026 Музеи мира</p>
</footer>

</body>
</html>