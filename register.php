<?php 
    require 'functions.php';
    if (isset($_POST["submit"]) ){
        if (register($_POST) > 0){
            echo "
            <script>
            alert('Registrasi Berhasil!');
            </script>";
        } else {
            // echo mysqli_error($db); 
            echo "<script>
            alert('Registrasi gagal!');
            </script>";
        }
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container-form">
  <form method="POST">
    <div class="pt-25px">
      <label for="name" class="fs-3">Name</label>
      <input type="text" class="input-1 mt-10px fs-2 p-form" id="name" name="name" placeholder="Name" />
    </div>
    <div class="pt-25px">
      <label for="username" class="fs-3">Username</label>
      <input type="text" class="input-1 mt-10px fs-2 p-form" id="username" name="username" placeholder="Username" />
    </div>
    <div class="pt-25px">
      <label for="password" class="fs-3">Password</label>
      <input type="password" class="input-1 mt-10px fs-2 p-form" id="password" name="password" placeholder="Password" />
    </div>
    <div class="pt-25px">
      <label for="confirm_password" class="fs-3">Confirm Password</label>
      <input type="password" class="input-1 mt-10px fs-2 p-form" id="confirm_password" name="confirm_password" placeholder="Confirm Password" />
    </div>
    <div class="pt-25px">
      <button type="submit" name="submit" class="button-mode my-btn-dark fs-2" id="mode-container">Register</button>
    </div>
  </form>
  <div class="pt-25px">
    <a href="/nikky/login.php">Have an Account ?</a>
  </div>
</div>
</body>
</html>