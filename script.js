var address = 'Москва, Авиамоторная улица, 49/1';

// Создаем объект "Яндекс.Карты"
ymaps.ready(function () {
  var map = new ymaps.Map('map', {
    center: [55.76, 37.64],
    zoom: 10
  });

  // Поиск по адресу
  ymaps.geocode(address, {
    results: function (result) {
      if (result.geoObjects.length > 0) {
        // Добавляем точку на карту
        var placemark = new ymaps.Placemark(result.geoObjects[0].geometry.getCoordinates(), {
          balloonContent: address
        });
        map.geoObjects.add(placemark);
      }
    }
  });
});