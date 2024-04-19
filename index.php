<?php
    require_once 'database.php'   
    

    // Определим собственный класс исключений для ошибок MySQL
	//class MySQL_Exception extends Exception {
		//public function __construct($message) {
			//parent::__construct($message);
		//}
	//}
	

	//try {
    	// Запрос к базе данных
		//$result = mysqli_query($link, "SHOW TABLES");
        
		// В случае неудачного запроса генерируем исключение
		//if (!$result) throw new MySQL_Exception(mysqli_error($link));
			
		// Отображаем результаты
		//echo '<p>Таблицы, имеющиеся в базе данных: </p><ul>';		
		//while ($row = mysqli_fetch_row($result)) {
			//echo "<li>Таблица: {$row[0]}</li>";
		//}
		//echo '</ul>';
	//}
	//catch (Exception $ex) {
		//echo 'Ошибка при работе с MySQL: <b style="color:red;">'.$ex->getMessage().'</b>';
	//}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Home</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script src="https://api-maps.yandex.ru/2.1/?apikey=ваш API-ключ&lang=ru_RU" type="text/javascript"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />



  <link rel="stylesheet" href="static/styles/style.css" />
  <link rel="stylesheet" href="static/styles/navbar.css" />
  <link rel="stylesheet" href="static/styles/search.css" />
  <link rel="stylesheet" href="static/styles/catalog.css" />
  <link rel="stylesheet" href="static/styles/card.css" />

</head>

<body>
  <!-- Для карты -->
  <!-- <div class="map_container"> 
        <div id="map" style="width: 80%; height: 400px"></div>
    </div> -->


  <div class="app-wrapper">
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
                <a class="nav-link active" aria-current="page" href="index.php">Главная страница</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="log.php">Профиль</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- ТЕЛО -->
    <div class="app-wrapper-content">
      <!-- Зона поиска -->
      <div class="seach-area">
        <nav class="navbar bg-light">
          <div class="container-fluid">
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Введите текст для поиска" aria-label="Search" />
              <button class="btn btn-outline-success" type="submit">
                Поиск
              </button>
            </form>
          </div>
        </nav>
      </div>

      <!-- Каталог -->
      <div class="catalog-area">
       
        <div class="card h-70">
          <img src="https://cdn1.ozone.ru/s3/multimedia-v/6381259075.jpg" class="card-img-top" alt="картинка товара" />
          <div class="card-body">
            <h4 class="card-title">playstation 5</h4>
            <h5 class="card-title">категория: приставка</h5>
            <p class="card-text">
              приставка playstation 5. в отличносм состояние. уже установлено 10 крутых игр
            </p>
            <h6 class="card-title">3500 руб/день</h6>
            <p class="card-text">
              телефон: 89024566978
            </p>
            <p class="card-text">
              адрес: пушкинская улица, 10
            </p>
          </div>
        </div>

        <div class="card h-70">
          <img src="http://almode.ru/uploads/posts/2021-12/1639851708_17-almode-ru-p-stilnaya-novogodnyaya-yelka-20.jpg" class="card-img-top" alt="картинка товара" />
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
          </div>
        </div>

        <div class="card h-70">
          <img src="https://iwbm.ru/image/cache/catalog/bosch/bosch-gsb-1600-re-2-800x800.jpg" class="card-img-top" alt="картинка товара" />
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
          </div>
        </div>

      </div>

      <!-- Карта -->
      <div class="map-area">
        <!-- <div class="map_container">  -->
        <div id="map" style="width: 1400px; height: 825px"></div>
        <!-- </div> -->
      </div>
      
      <!-- ПОПАПЫ и Карта -->
      <script type="text/javascript">
        ymaps.ready(init);

        function init() {
          var myMap = new ymaps.Map("map", {
            center: [68.9713363830846, 33.0750483515625],
            zoom: 13,
          })

          myPlacemark1 = new ymaps.Placemark([68.970563, 33.081116], {
              preset: 'islands#redDotIcon',
              // preset: 'islands#dotIcon',
              // iconColor: '#735184',
              balloonContentHeader: "Playstation 5",
              balloonContentBody: "3500 руб/день",
              balloonContentFooter: "Телефон: 89024566978",
              hintContent: "Приставка"
            }),

            myPlacemark2 = new ymaps.Placemark([68.968649,33.082455], {
              preset: 'islands#redDotIcon',
              balloonContentHeader: "Ёлка для нового года",
              balloonContentBody: "5000 руб/день",
              balloonContentFooter: "Телефон: 89024566978",
              hintContent: "Декор"
            }),

            myPlacemark3 = new ymaps.Placemark([68.966765,33.073049], {
              preset: 'islands#redDotIcon',
              balloonContentHeader: "Дрель",
              balloonContentBody: "500 руб/день",
              balloonContentFooter: "Телефон: 89116458945",
              hintContent: "Инструменты"
            }),

            myMap.geoObjects.add(myPlacemark1);
            myMap.geoObjects.add(myPlacemark2);
            myMap.geoObjects.add(myPlacemark3);
        }
      </script>


    </div>

    <!-- PHP -->
    <?php
    include("database.php");
    ?>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>