<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
<header class="header">
        <div class="logo">
            <a href="index.php"><b>HORIZON EXPLORERS</b></a>
        </div>
        <nav>
            <a href="index.php" class="home">Home</a>
            <a href="#" class="nav">News</a>
            <a href="#" class="nav">Contact</a>
            <a href="#" class="nav">Buy</a>
        </nav>
        <!-- <a href="#" class="signup" >Sign Up</a> -->
        <button class="btnLogin-popup"> Sign Up</button>
    </header>

    <div class="wrapper">
    <span class="icon-close"><ion-icon name="close"></ion-icon></span>
    <div class="form-box">
      <h2>Login</h2>
      <form action="login.php">
        <div class="input-box">
          <span class="icon"><ion-icon name="mail"></ion-icon></span>
          <input type="email" name="mail" required>
          <label>Email</label>
        </div>
        <div class="input-box">
          <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
          <input type="password" name="password" required>
          <label>Password</label>
        </div>
        <div class="remember-forgot">
          <label for=""><input type="checkbox">Remember me</label>
          <a href="#">Forgot password</a>
        </div>
        <button type="submit" name="login" class="btn">Login</button>
        <div class="login-register">
          <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
        </div>
        </form>
      </div>
    </div>



    
    <div class="wrapperReg">
    <span class="icon-close1"><ion-icon name="close"></ion-icon></span>
    <div class="form-box">
      <h2>Register</h2>
      <form action="#" method="post">
        <div class="input-box">
          <span class="icon"><ion-icon name="mail"></ion-icon></span>
          <input type="email" name="mail" required>
          <label>Email</label>
        </div>
        <div class="input-box">
          <!-- <span class="icon"><ion-icon name="name"></ion-icon></span> -->
          <input type="name" name="name" required>
          <label>Name</label>
        </div>
        <div class="input-box">
          <!-- <span class="icon"><ion-icon name=""></ion-icon></span> -->
          <input type="surname" name="surname" required>
          <label>Surname</label>
        </div>
        <div class="input-box">
          <!-- <span class="icon"><ion-icon name="name"></ion-icon></span> -->
          <input type="tel" name="phonenumber" required>
          <label>Phone number</label>
        </div>
        <div class="input-box">
          <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
          <input type="password" name="password" required>
          <label>Password</label>
        </div>
        <!-- <div class="remember-forgot">
          <label for=""><input type="checkbox">Remember me</label>
          <a href="#">Forgot password</a>
        </div> -->
        <button type="submit" name="register" class="btn">Register</button>
        <div class="login-register">
          <p>Already have an account?<a href="#" class="login-link">Login</a></p>
        </div>
      </form>
    </div>
  </div>
  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['register'])) {
        // Обработка формы регистрации
        $mail = $_POST['mail'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $phonenumber = $_POST['phonenumber'];
        $password = $_POST['password'];

        $sql = "INSERT INTO registration (mail, name, surname, phonenumber, password) VALUES ('$mail', '$name', '$surname', '$phonenumber', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "Registration successful";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } elseif (isset($_POST['login'])) {
        // Обработка формы входа
        $mail = $_POST['mail'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM registration WHERE mail='$mail' AND password='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "Login successful";
            // Здесь можно добавить код для перенаправления на другую страницу после успешного входа
        } else {
            echo "Login failed. Invalid email or password.";
        }
    }
}

$conn->close();
?>
    
    
    <script src="header.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>