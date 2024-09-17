<?php 
    session_start();
    include('server.php');
    if (isset($_SESSION['login_seccess'])){
        header('location:firstpage.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/png" href="image/logo.png"/>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.6)), url("image/home.png");
            -webkit-background-size: cover;
        }
        .middle {
            background-color: white;
        }
        .container_log {
            background-color: white;
            width: 350px;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h3 {
            color: #ff3333; /* Red text */
            margin-bottom: 30px;
        }
        .data input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ff3333;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        .data input:focus {
            outline: none;
            border-color: #ff6666;
        }
        .submit input {
            background-color: #ff3333;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        .submit input:hover {
            background-color: #ff6666;
        }
        .areyou {
            margin-top: 20px;
        }
        .areyou p {
            color: #333;
        }
        .areyou a {
            color: #ff3333;
            text-decoration: none;
        }
        .areyou a:hover {
            text-decoration: underline;
        }
        .error {
            color: white;
            background-color: #ff3333;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
        }
    </style>
</head>
<body class="middle">
    <div class="container_log">
        <h3>Login</h3>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
            </div>
        <?php endif ?>
        <form action="login_db.php" method="post">
            <div class="data">
                <input type="text" placeholder="Username" name="username" autofocus>
                <input type="password" placeholder="Password" name="password">
            </div>
            <div class="submit">
                <input type="submit" value="Login" name="login_user">
            </div>
        </form>
        <div class="areyou">
            <p>You don't have an account?...<a href="register.php">Register</a></p>
        </div>
    </div>
</body>
</html>
