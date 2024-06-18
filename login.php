<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $mail = $_POST['mail'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM registration WHERE mail='$mail' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['name']; // Сохраняем имя пользователя в сессии
        header("Location: index.php"); // Перенаправляем на главную страницу
        exit();
    } else {
        echo "Login failed. Invalid email or password.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HORIZON EXPLORERS</title>
    <link rel="stylesheet" href="css/header.css">
    <style>
        /* .header span {
            font-weight: bold;
        } */

        .header .welcome {
            margin-left: 500px ;
            font-size: 20px;
            font-weight: 600;
            color: #fff;
        }

        .header .username {
            color: #fff;
        }
    </style>
</head>
<body>
<header class="header">
    <div class="logo">
        <a href="login.php"><b>HORIZON EXPLORERS</b></a>
    </div>
    <nav>
        <a href="login.php" class="home">Home</a>
        <a href="news.php" class="nav">News</a>
        <a href="#" class="nav">Contact</a>
        <a href="#" class="nav">Buy</a>
    </nav>
    <?php
    if (isset($_SESSION['username'])) {
        echo '<span class="welcome">Welcome, <span class="username">' . $_SESSION['username'] . '</span></span>';
    } else {
        echo '<form action="" method="post">
                <input type="email" name="mail" required placeholder="Email">
                <input type="password" name="password" required placeholder="Password">
                <button type="submit" name="login">Login</button>
              </form>';
    }
    ?>
</header>

<?php include 'content.php'; ?>

</body>
</html>