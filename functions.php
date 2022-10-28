<?php
// Connect ke Database
$db = mysqli_connect("localhost", "root", "", "nikky");

// Ambil semua data yang berada di tabel dengan function untuk mempersingkat sintaks
function query($query) {
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}


function register($data){
  global $db;
  $name = strtolower(stripslashes($data["name"]));
  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($db, $data["password"]);
  $photo = upload();
  if (!$photo) {
      return false;
  }
  $confirm_password = mysqli_real_escape_string($db, $data["confirm_password"]);

  $result = mysqli_query($db, "SELECT username FROM users WHERE username = '$username'");
  if(mysqli_fetch_assoc($result)) {
      echo "<script>
          alert('Username telah digunakan')
      </script>";
      return false;
  } 

  if ($password !== $confirm_password) {
      echo "<script>
          alert('Password Konfirmasi salah')
      </script>";
      return false;
  };

  // Enkripsi
  $password = password_hash($password, PASSWORD_DEFAULT);

  mysqli_query($db, "INSERT INTO users(photo, name, username, password) VALUES ('$photo', '$name', '$username', '$password')");
  return (mysqli_affected_rows($db));   
};



function update ($data){
  global $db;

  $id = htmlspecialchars($data["id"]);
  $name = htmlspecialchars($data["name"]);
  $username = htmlspecialchars($data["username"]);
  $photo = upload();
  $samePhoto = htmlspecialchars($data["samePhoto"]);

  if ($_FILES['photo']['error'] === 4){
      $photo =  $samePhoto;   
  }

  $query = "UPDATE users SET photo = '$photo', name = '$name', username = '$username'
              WHERE id = '$id'
              ";
  mysqli_query($db, $query);

  return (mysqli_affected_rows($db));
}

function upload(){
  $nameFile = $_FILES["photo"]["name"];
  $sizeFile = $_FILES["photo"]["size"];
  $errorFile = $_FILES["photo"]["error"];
  $tmpFile = $_FILES["photo"]["tmp_name"];
  
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
  $ekstensiGambar = explode('.', $nameFile);              //  Pecah, dan batasi dengan delimiter
  $ekstensiGambar = strtolower(end($ekstensiGambar));     //  Ambil string akhir dari ekstensi gambar, lalu ubah menjadi huruf kecil
  if (in_array($ekstensiGambar, $ekstensiGambarValid) === False){   //  cari apakah ekstensi ada didalam array, in_array(jarum, jerami)
      echo " <script>
              alert('Yang anda upload bukan gambar!');
              </script>";
      return false;
  }
  if ($sizeFile > 2000000){                                         //  cek ukuran file
      echo " <script>
      alert('Ukuran melebihi batas!');
      </script>"; 
      return false;
  }
  date_default_timezone_set('Asia/Makassar');
  $nameFileBaru = date('m-d-Y-h-i-s-a', time());
  $nameFileBaru .= '.';
  $nameFileBaru .= $ekstensiGambar;

  
  move_uploaded_file($tmpFile, 'img/' . $nameFileBaru);
  return $nameFileBaru;
}

// $rank = $_GET["Rank"]

function delete($id){
  global $db;
  $query = "DELETE FROM users WHERE id = $id";
  mysqli_query($db, $query);        

  return (mysqli_affected_rows($db));
}