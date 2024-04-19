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
                            <a class="nav-link active" href="log.php">Профиль</a>
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
            <h2 class="active" > Вход </h2>
            <h2 class="inactive underlineHover"> 
                <a class="nav-link" href="reg.php"> Регистрация 
                </a>
            </h2>

            <!-- Icon -->
            <!-- <div class="fadeIn first">
                      <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
                    </div> -->

            <!-- Login Form -->
            <form action="profile.php" method="get">
                <input type="text" id="userName" class="fadeIn second" name="tel" placeholder="Телефон">
                <input type="text" id="password" class="fadeIn third" name="passsword" placeholder="Пароль">
                <input type="submit" class="fadeIn fourth" value="Войти">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Забыли пароль?</a>
            </div>
        </div>
</body>