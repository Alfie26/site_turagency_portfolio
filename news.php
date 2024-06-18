<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
    <link rel="stylesheet" href="css/news.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="news">
            <div class="news-item">
                <img src="images/news1.jpg" alt="News 1">
                <div class="news-content">
                    <h2>Новость 1</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eget semper justo. Sed euismod, nunc nec ultricies.</p>
                    <a href="#">Подробнее</a>
                </div>
            </div>
            <div class="news-item">
                <img src="images/news2.jpg" alt="News 2">
                <div class="news-content">
                    <h2>Новость 2</h2>
                    <p>Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi.</p>
                    <a href="#">Подробнее</a>
                </div>
            </div>
            <div class="news-item">
                <img src="images/news3.jpg" alt="News 3">
                <div class="news-content">
                    <h2>Новость 3</h2>
                    <p>Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.</p>
                    <a href="#">Подробнее</a>
                </div>
            </div>
        </div>
    </div>

    <?php  
        require_once "header.php";
    ?>

    <script src="index.js"></script>
</body>
</html>
