
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style8(personal_page).css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <title>Отзыв</title>
    <style>
        body {
            margin: 0;
            font-family: 'Open Sans', sans-serif;
            background-image: url('picture/mos_background.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .blue-rectangle {
            background-color: #92dafe;
            color: #0238da;
            font-weight: bold;
            padding: 5px;
            margin-right: 0px;
            height: 90px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            margin: 0 166px;
        }

        .header_0 {
            color: #4169E1;
            text-align: center;
            width: 100%;
        }

        .header-line {
            padding-top: 50px;
            display: flex;
            align-items: center;
            justify-content: space-around;
            margin-bottom: 10px; /* Добавить отступ вниз для элемента header */
        }

        .nav-item {
            margin-right: 10px; /* Добавить отступ справа для элемента nav-item */
            color: #0238da;
            text-decoration: none;
            font-weight: 700;
            font-size: 18px;
            margin-right: 25px;
            transition: color 0.3s linear;
        }

        .nav-item:hover {
            color: #4778cc;
        }

        .num {
            color: #4169E1;
            text-decoration: none;
            font-weight: 700;
            transition: color 0.3s linear;
        }

        .num:hover {
            color: #4778cc;
        }

        .button {
            background-color: #42addb;
            color: #2b6282;
            text-decoration: none;
            padding: 14px 18px;
            font-weight: 700;
            transition: background-color 0.2s linear;
        }
        
        .footer{
            margin-bottom: auto;
        }
        
        .container2{
            margin-bottom: 300px;
        }

        .content {
            text-decoration: aquamarine;
            background-color: #92dafe;
            color: #4f4f4f;
            text-align: center;
            margin-top: 20px;
            font-size: 20px;
            font-family: Arial, sans-serif;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

        @media (max-width: 767px) {
            /* Здесь задаются стили для экранов шириной до 767 пикселей */
        }

        @media (min-width: 768px) {
            /* Стили для планшетов и небольших экранов */
        }
    </style>
</head>
<body>
    <header class="header_0">
        <div class="header">
            <div class="container">
                <div class="header-line">
                    <div class="blue-rectangle">Food checking</div>
                    <div class="header-logo">
                        <img src="logo/icon2.jpg" style="max-width: 120px; height: auto;">
                    </div>
                    <div class="nav">
                        <a class="nav-item" href="index.html">Главная</a>
                        <a class="nav-item" href="map.html">Карта</a>
                        <a class="nav-item" href="feedback_set.php">Оставить отзыв</a>
                        <a class="nav-item" href="personal_page_connection.php">Личный кабинет</a>
                    </div>
                    <div class="btn">
                        <a class="button" href="registration.html">Регистрация</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="container2">
        <div class="reviews">
            <div class="container">
                <div class="left-column">
                    <h1>Личный кабинет</h1>
                    <div class="row" id="real-estates-detail">
                        <div class="col-lg-4 col-md-4 col-xs-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <header class="panel-title">
                                        <div class="text-center"></div>
                                    </header>
                                </div>
                                <div class="panel-body">
                                    <div class="text-center" id="author">
                                        <img src="picture/user-svgrepo-com.svg" style="width: 100px; height: 100px;">
                                        <h3>Контактная информация</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-xs-12">
                            <div class="panel">
                                <div class="panel-body">
                                    <div id="myTabContent" class="tab-content">
                                        <div class="tab-pane fade" id="contact">
                                            <form role="form">
                                                <div class="form-group">
                                                    <label>Ваше имя</label>
                                                    <input type="text" class="form-control rounded" placeholder="Имя">
                                                </div>
                                                <div class="form-group">
                                                    <label>Ваш E-mail адрес</label>
                                                    <input type="text" class="form-control rounded" placeholder="Е-майл">
                                                </div>
                                                <div class="form-group">
                                                    <label>Ваша контактная информация</label>
                                                    <input type="email" class="form-control rounded" placeholder="Контактная информация">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cabinet">
            <div class="user-reviews">
                <h1>Ваши отзывы</h1>
                <div id="reviews-list">
                <?php
                        $connection = new mysqli('localhost', 'root', '', 'my_project_3');

                        if (mysqli_connect_errno()) {
                            echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            exit();
                        }
                        // Выборка отзывов из базы данных
                        $query = "SELECT * FROM отзывы";
                        $result = mysqli_query($connection, $query);
                        // Отображение отзывов
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<div>";
                            echo "<strong>" . $row['venue'] . "</strong> ";
                            echo "(" . $row['feedback'] . "):<br>";
                            echo $row['created_at'];
                            echo "</div>";
                        }
                        mysqli_close($connection);
                        ?>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <p class="container2">&copy; Авторское право данного сайта закрепляется за Шминке Ярославом Даниловичем</p>
    </footer>
</body>
</html>