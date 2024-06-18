<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Clickable Slider Website Example</title>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        transition: background-image 0.5s ease;
    }

    #slider {
        display: flex;
    }

    #slider img {
        max-width: 100px;
        margin: 0 10px;
        cursor: pointer;
        transition: transform 0.3s;
    }

    #slider img:hover {
        transform: scale(1.1);
    }

    #imageInfo {
        position: absolute;
        left: 20px;
        top: 50%;
        transform: translateY(-50%);
        padding: 10px;
        background-color: rgba(0, 0, 0, 0.5);
        color: white;
    }
</style>
</head>
<body>
    <div id="slider">
        <img src="images/1.jpg" alt="Image 1">
        <img src="images/2.jpg" alt="Image 2">
        <img src="images/3.jpg" alt="Image 3">
    </div>

    <div id="imageInfo">
        <h2 id="imageTitle"></h2>
        <p id="imageDescription"></p>
    </div>

    <script>
        const images = document.querySelectorAll('#slider img');
        let index = 0;

        function changeBackground() {
            document.body.style.backgroundImage = `url(${images[index].src})`;
        }

        function showImageInfo() {
            const currentImage = images[index];
            document.getElementById('imageTitle').innerText = currentImage.alt;
            document.getElementById('imageDescription').innerText = currentImage.getAttribute('data-description');
        }

        images.forEach((image, i) => {
            image.addEventListener('click', () => {
                index = i;
                changeBackground();
                showImageInfo();
            });
        });

        changeBackground();
        showImageInfo();
    </script>
</body>
</html>