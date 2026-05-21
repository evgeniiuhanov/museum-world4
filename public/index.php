<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Музеи мира</title> <!-- Favicon -->
    <link rel="icon" href="img/favicon.ico"> <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Собственные стили -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body> <!-- ===== HEADER ===== -->
    <header class="bg-dark">
        <nav class="navbar navbar-expand-lg navbar-dark container"> <!-- Логотип --> <a
                class="navbar-brand d-flex align-items-center" href="index.php"> <img src="img/logo.png" width="40"
                    class="me-2"> Музеи мира </a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#menu"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"> <a class="nav-link" href="index.php">Главная</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="catalog.php">Каталог</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="order.php">Экскурсия</a> </li>
                </ul>
            </div>
        </nav>
    </header> <!-- ===== MAIN ===== -->
    <main class="container mt-5">
        <div class="text-center mb-5">
            <h1>Добро пожаловать в Мир музеев</h1>
            <p class="lead">Лучшие музеи для вас</p>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="card"> <img src="img/louvre.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5>Лувр</h5> <a href="museum.php?museum=louvre" class="btn btn-dark">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card"> <img src="img/hermitage.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5>Эрмитаж</h5> <a href="museum.php?museum=hermitage" class="btn btn-dark">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card"> <img src="img/british.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5>Британский музей</h5> <a href="museum.php?museum=british" class="btn btn-dark">
Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card"> <img src="img/metropolitan.jpg" class="card-img-top">
                    <div class="card-body text-center">
                        <h5>Метрополитен</h5> <a href="museum.php?museum=metropolitan" class="btn btn-dark">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </main> <!-- ===== FOOTER ===== -->
    <footer class="bg-dark text-white text-center p-4 mt-5">
        <p>© 2026 Музеи мира</p>
    </footer> <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>

</html>