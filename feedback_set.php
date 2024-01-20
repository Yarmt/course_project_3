<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel='stylesheet' href="style7(feedback).css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Отзыв</title>
</head>
<body>
    <header class="header_0">
        <div class='header'>
            <div class='container'>
                <div class='header-line'>
                    <div class="blue-rectangle">Food checking</div>
                    <div class='header-logo'>
                    <a href="index.html"><img src="logo/icon2.jpg" style="max-width: 120px; height: auto;">
                    </div>

                    <div class='nav'>
                        <a class='nav-item' href="index.html">Главная</a>
                        <a class='nav-item' href="map.html">Карта</a>
                        <a class='nav-item' href="feedback_set.php">Оставить отзыв</a>
                        <a class='nav-item' href="personal_page.html">Личный кабинет</a>
                    </div>


                    <div class='btn'>
                        <a class='button' href='registration.html'>Регистрация</a>
                    </div>
                </div>
            </div>
              <div class="container">
                  <header>
                    <h1>Оставить отзыв</h1>
                </header>
                
                <div class="container">
                    <form action="submit_feedback.php" method="post">
                        <label for="venueSelect">Выберите заведение:</label>
                        <select id="venueSelect" name="venue">
                            <?php
                            $connection = new mysqli('localhost', 'root', '', 'dataset_food');
                            if ($connection->connect_error) {
                                die('Ошибка подключения к базе данных: ' . $connection->connect_error);
                            }
                            $sql = "SELECT Name FROM data";
                            $result = $connection->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row['Name'] . "'>" . $row['Name'] . "</option>";
                                }
                            } else {
                                echo "<option value=''>Нет данных</option>";
                            }
                            $connection->close();
                            ?>
                        </select>
                        <br>
                        <label for="feedbackText">Отзыв:</label>
                        <textarea id="feedbackText" name="feedback" rows="4" cols="50"></textarea>
                        <br>
                        <input type="submit" value="Отправить">
                    </form>
                </div>
              </div>
            
</div>
<footer class="footer">
    <p class="container">
        &copy; Авторское право данного сайта закрепляется за Шминке Ярославом Даниловичем
    </p>
</footer>
</body>
</html>