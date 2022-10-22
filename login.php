<?php 
    session_start();
    require 'functions.php';

    if (isset($_COOKIE["id"]) && isset($_COOKIE["key"])){
        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];

        $result = mysqli_query($db, "SELECT username FROM users WHERE id = $id");
        $rows = mysqli_fetch_assoc($result);
        if ($key === hash('sha256', $rows['username'])){
            $_SESSION["login"] = true;

        }
    }

    if ( isset($_SESSION["login"])){
      header('Location: dashboard.php');
      exit;
    } 
    
    if( isset($_POST["submit"] ) ){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $result = mysqli_query($db, "SELECT * FROM users WHERE username = '$username'");
        if ( mysqli_num_rows($result) === 1 ){
            $rows = mysqli_fetch_assoc($result);
            if (password_verify($password, $rows["password"])){
                $_SESSION["login"] = true;
                if (isset($_POST["remember"])){
                    setcookie('id', $rows["id"], time()+ 3600);
                    setcookie('key', hash('sha256', $rows["username"]), time()+ 3600);
                };
                header("Location: dashboard.php");
                exit;
            }                  
        }
    };
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container-form">
  <form method="POST">
    <div>
      <label for="username" class="fs-3">Username</label>
      <input type="text" class="input-1 mt-10px fs-2 p-form" id="username" name="username" placeholder="Username" />
    </div>
    <div class="pt-25px">
      <label for="password" class="fs-3">Password</label>
      <input type="password" class="input-1 mt-10px fs-2 p-form" id="password" name="password" placeholder="Password" />
    </div>
    <div class="pt-25px">
      <label for="default-remember" class="fs-3">
          <input type="checkbox" id="default-remember" /> Remember me
      </label>
    </div>
    <div class="pt-25px">
      <button type="submit" name="submit" class="button-mode my-btn-dark fs-2" id="mode-container">Login</button>
    </div>
    <div class="pt-25px">
      <a href="/nikky/register.php">Don't Have an Account ?</a>
    </div>
  </form>
</div>
</body>
</html>