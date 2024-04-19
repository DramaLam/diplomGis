$(function () {

    var myMap;

    // Дождёмся загрузки API и готовности DOM.
    ymaps.ready(init);

    function init() {
        // Создание экземпляра карты и его привязка к контейнеру с
        // заданным id ("map").
        var myMap = new ymaps.Map('map', {
            // При инициализации карты обязательно нужно указать
            // её центр и коэффициент масштабирования.
            center: [68.9713363830846, 33.0750483515625], // Москва
            zoom: 13
        }, {
            searchControlProvider: 'yandex#search'
        });

    }

      

});