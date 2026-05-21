<?php

require_once "script.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $museum = $_POST['museum'];

    if (saveOrder($conn, $name, $phone, $email, $museum)) {
        $message = "Заявка успешно отправлена!";
    } else {
        $message = "Ошибка при отправке!";
    }
}

?>

<!DOCTYPE html>
<html lang="ru">

<head>

    <meta charset="UTF-8">

    <title>Заказать экскурсию</title>

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

    <h1 class="text-center mb-4">
        Заказать индивидуальную экскурсию
    </h1>

    <?php if ($message): ?>

        <div class="alert alert-info">
            <?= $message ?>
        </div>

    <?php endif; ?>

    <div class="row justify-content-center">

        <div class="col-md-6">

            <form method="POST">

                <div class="mb-3">
                    <label class="form-label">Ваше имя</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Телефон</label>
                    <input type="tel" name="phone" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Музей</label>

                    <select name="museum" class="form-select">

                        <option>Лувр</option>
                        <option>Эрмитаж</option>
                        <option>Британский музей</option>

                    </select>
                </div>

                <button type="submit" class="btn btn-dark w-100">
                    Отправить
                </button>

            </form>

        </div>

    </div>

</main>

<footer class="bg-dark text-white text-center p-4 mt-5">
    <p>© 2026 Музеи мира</p>
</footer>

</body>
</html>