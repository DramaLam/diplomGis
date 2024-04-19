<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Home</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="static/styles/style.css">
    <link rel="stylesheet" href="static/styles/navbar.css">
    <link rel="stylesheet" href="static/styles/log.css">
    <link rel="stylesheet" href="static/styles/catalog.css">
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Шкафчик</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Главная страница</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="profile.php">Профиль</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">Справка</a>
                          </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="content">
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2 class="active" > Регистрация объявления </h2>

            <!-- Icon -->
            <!-- <div class="fadeIn first">
                      <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
                    </div> -->

            <!-- Login Form -->
            <form action="C:\Users\nikat\OneDrive\Рабочий стол\diplomH\profile.php" method="get">
                <input type="text" id="category" class="fadeIn second" name="category" placeholder="Категория">
                <input type="text" id="password" class="fadeIn third" name="passsword" placeholder="Название">
                <input type="text" id="descriptoin" class="fadeIn third" name="descriptoin" placeholder="Описание">
                <input type="text" id="price" class="fadeIn third" name="price" placeholder="Цена за сутки (руб/сут)">
                <input type="text" id="address" class="fadeIn third" name="address" placeholder="Адрес">
                <input type="text" id="photo" class="fadeIn third" name="photo" placeholder="Фотография">
                <input type="submit" class="fadeIn fourth" value="Добавить">
            </form>

        </div>
</body>