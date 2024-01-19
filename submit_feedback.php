<?php
// Подключение к базе данных
$connection = new mysqli('localhost', 'root', '', 'my_project_3');

// Проверка подключения
if ($connection->connect_error) {
    die('Ошибка подключения к базе данных: ' . $connection->connect_error);
}

// Получение данных из формы
$venue = $_POST['venue']; // выбранное заведение
$feedback = $_POST['feedback']; // текст отзыва

// Защита от SQL-инъекций
$venue = $connection->real_escape_string($venue);
$feedback = $connection->real_escape_string($feedback);

// Запрос к базе данных для вставки отзыва
$sql = "INSERT INTO отзывы (venue, feedback) VALUES ('$venue', '$feedback')";

if ($connection->query($sql) === TRUE) {
    echo "Отзыв успешно сохранен";
    echo "<br>";
    echo "<a href='index.html'>Вернуться на главную страницу</a>";
    echo "<br>";
    echo "<a href='feedback_set.php'>Посмотреть другие отзывы</a>";
} else {
    echo "Ошибка: " . $sql . "<br>" . $connection->error;
}

// Закрытие соединения с базой данных
$connection->close();
?>