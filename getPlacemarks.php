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