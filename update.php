<?php 
session_start();
if ( !isset($_SESSION["login"])){
  header('Location: login.php');
  exit;
} 
    require 'functions.php';

    $id = $_GET["id"];
    $user = query("SELECT * FROM users WHERE id = $id")[0];
    
    if (isset($_POST["submit"])){

    if(update($_POST)> 0):
        echo "
        <script>
        alert('Data Berhasil Diubah');
        document.location.href = 'dashboard.php';
        </script>
        ";
    else:
        $feedback = "Data Gagal Diubah";
        echo mysqli_error($db);
    endif;
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="container-form">
  <form method="POST">
    <input type="hidden" name="id" value="<?= $user["id"]?>">
    <div class="pt-25px">
      <label for="username" class="fs-3">Username</label>
      <input type="text" class="input-1 mt-10px fs-2 p-form" id="username" name="username" placeholder="Username" value="<?= $user["username"]?>" required/>
    </div>
    <div class="pt-25px">
      <label for="name" class="fs-3">Name</label>
      <input type="text" class="input-1 mt-10px fs-2 p-form" id="name" name="name" placeholder="Name" value="<?= $user["name"]?>" required/>
    </div>
    <div class="pt-25px">
      <button type="submit" name="submit" class="button-mode my-btn-dark fs-2" id="mode-container">Submit</button>
    </div>
  </form>
</body>
</html>