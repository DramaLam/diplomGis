<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Home</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="static/styles/style.css">
  <link rel="stylesheet" href="static/styles/navbar.css">
  <link rel="stylesheet" href="static/styles/log.css">
  <link rel="stylesheet" href="static/styles/catalog.css">
  <link rel="stylesheet" href="static/styles/profile.css">
</head>

<body>
  <header class="header">
    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Шкафчик</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

  <div class="app-wrapper-content-profile">
    <div class="app-wrapper-prof">

      <!-- USER -->
      <div class="app-wrapper-user">
        <div class="user-text">
          Кузнецова Екатерина
        </div>
        <!-- <div class="button-ex">
          <a href="log.php" class="btn text-bg-secondary">
            <div> Выйти </div>
          </a>
        </div> -->
      </div>

      <!-- Добавление -->
      <div class="app-wrapper-add">
        <div class="button-add">
          <a href="add.php" class="btn text-bg-secondary">
            <div> Добавить объявление </div>
          </a>
        </div>
      </div>



      <!-- Товары пользователя -->
      <div class="row row-cols-1 row-cols-md-3 g-4">

        <div class="col">

          <div class="card h-100">
            <img src="https://cdn1.ozone.ru/s3/multimedia-v/6381259075.jpg" class="card-img-top" alt="Фото вещи">
            <div class="card-body">
              <h4 class="card-title">Playstation 5</h4>
              <h5 class="card-title">Категория: Приставка</h5>
              <p class="card-text">
                Приставка Playstation 5. В отличносм состояние. Уже установлено 10 крутых игр
              </p>
              <h6 class="card-title">3500 руб/день</h6>
              <p class="card-text">
                Телефон: 89024566978
              </p>
              <p class="card-text">
                Адрес: Пушкинская улица, 10
              </p>
              <a href="#" class="btn text-bg-secondary">Удалить объявление</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <img src="https://iwbm.ru/image/cache/catalog/bosch/bosch-gsb-1600-re-2-800x800.jpg" class="card-img-top" alt="Фото вещи">
            <div class="card-body">
              <h4 class="card-title">Дрель</h4>
              <h5 class="card-title">Категория: Инструменты</h5>
              <p class="card-text">
                Дрель ударная GSB 1600 RE
              </p>
              <h6 class="card-title">500 руб/день</h6>
              <p class="card-text">
                Телефон: 89116458945
              </p>
              <p class="card-text">
                Адрес: проспект Ленина, 76
              </p>
              <a href="#" class="btn text-bg-secondary">Удалить объявление</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card h-100">
            <img src="http://almode.ru/uploads/posts/2021-12/1639851708_17-almode-ru-p-stilnaya-novogodnyaya-yelka-20.jpg" class="card-img-top" alt="картинка товара">
            <div class="card-body">
              <h4 class="card-title">Ёлка для нового года</h4>
              <h5 class="card-title">Категория: Декор</h5>
              <p class="card-text">
                Искусственная новогодняя елка, украшена встроенными огоньками, использовали только один раз, 1.5 метра в высоту. Сдам на период Нового года
              </p>
              <h6 class="card-title">5000 руб/день</h6>
              <p class="card-text">
                Телефон: 89024566978
              </p>
              <p class="card-text">
                Адрес: улица Софьи Перовской, 5
              </p>
              <a href="#" class="btn text-bg-secondary">Удалить объявление</a>
            </div>
          </div>
        </div>

        <!-- <div class="col">
          <div class="card h-100">
            <img src="https://cdn1.ozone.ru/s3/multimedia-v/6381259075.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
                content. This content is a little bit longer.</p>
              <a href="#" class="btn text-bg-secondary">Удалить объявление</a>
            </div>
          </div>
        </div> -->

      </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>