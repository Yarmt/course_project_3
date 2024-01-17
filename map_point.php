<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href='style4(map).css'>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Карта</title>
</head>
<body>
    <header class="header_0">
        <div class='header'>
            <div class='container'>
                <div class='header-line'>
                    <div class='header-logo'>
                        <img src="logo/icon2.jpg" style="max-width: 120px; height: auto;">
                    </div>

                    <div class='nav'>
                        <a class='nav-item' href="index.html">ГЛАВНАЯ</a>
                        <a class='nav-item' href="map.html">Карта</a>
                        <a class='nav-item' href="places.html">База Данных</a>
                        <a class='nav-item' href="feedback.html">Оставить отзыв</a>
                    </div>


                    <div class='btn'>
                        <a class='button' href='#'>Личный кабинет</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="map"></div>

    <footer class="footer">
        <p class="container">&copy; Авторское право данного сайта закрепляется за Шминке Ярославом Даниловичем</p>
    </footer>

    <script src="https://api-maps.yandex.ru/2.1/?apikey=0f06968e-da6f-475e-b32b-59839cd8a2ee&lang=ru_RU" type="text/javascript"></script>
    <script type="text/javascript">
        ymaps.ready(function() {
            var myMap = new ymaps.Map('map', {
                center: [55.753215, 37.622504],
                zoom: 10
            });

            <?php
                $connection = new mysqli('localhost', 'root', '', 'dataset_food');
                if ($connection->connect_error) {
                    die('Ошибка подключения к базе данных: ' . $connection->connect_error);
                }
                $sql = "SELECT ID, latitude, longitude, description FROM data";
                $result = $connection->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "var placemark" . $row['ID'] . " = new ymaps.Placemark([" . $row['latitude'] . ", " . $row['longitude'] . "], { content: '" . $row['description'] . "' });";
                        echo "myMap.geoObjects.add(placemark" . $row['ID'] . ");";
                    }
                } else {
                    echo "console.log('0 результатов')";
                }
                $connection->close();
            ?>
        });
    </script>
</body>
</html>