<?php
  session_start();
  $message="";
  if(count($_POST)>0) {
      $con = mysqli_connect('localhost','root','','kidcode') or die('Unable To connect');
      $result = mysqli_query($con,"SELECT * FROM kullanicilar WHERE user_name='" . $_POST["user_name"] . "' and password = '". $_POST["password"]."'");
      $row  = mysqli_fetch_array($result);
      if(is_array($row)) {
      $_SESSION["id"] = $row['id'];
      $_SESSION["name"] = $row['name'];
      } else {
       $message = "Invalid Username or Password!";
      }
  }
  if(isset($_SESSION["id"])) {
  header("Location:userpage.php");
  }
?>
<!doctype html>
<html lang="tr" >
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KidCode Giriş Yap</title>    
    <link href="./css/signin.css" rel="stylesheet">

  </head>
  <body class="text-center"  style="background-image: url('./images/bg-login.png'); background-size:cover;"
   
>
    
<main class="form-signin text-white">
  <div class="container" style="padding:20px; background:transparent; border: 2px solid rgba(255,255,255,0.5); border-radius: 20px; backdrop-filter: blur(15px);">
  <form method="POST" class="mb-5 text-white">
    <img class="mb-4" src="./images/logo-dark.png" alt="" style="max-width: 100% !important;
                      width: 287px !important;
                      height: 60px !important;">
    <h1 class="h3 mb-3 fw-normal" style="color:#3a3a3a">Giriş Yap</h1>

    <div class="form-floating ">
      <input style="background:transparent;" type="text" class="form-control" id="floatingInput" placeholder="Kullanıcı Adı" name="user_name">
      <label for="floatingInput">Kullanıcı Adı</label>
      <div class="invalid-feedback">
        Kullanıcı Adı giriniz.
      </div>  
    </div>
    <div class="form-floating">
      <input style="background:transparent;"  type="password" class="form-control" id="floatingPassword" placeholder="Şifre" name="password">
      <label for="floatingPassword">Şifre</label>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
    <button style="background:transparent;"  class="w-100 btn btn-lg btn-light" type="submit" name="login">Giriş Yap</button>

  </form>
  </div>
</main>
<?php

// if(isset($_POST['login'])){
//   $username = mysqli_real_escape_string($link, $_POST["kullaniciAdi"]);
//   $password = mysqli_real_escape_string($link, $_POST["parola"]);
//   $sql="SELECT kullanici_adi, parola FROM kullanicilar";
//   if($result=mysqli_query($link, $sql)){
//     $row= mysqli_fetch_assoc($result);                                                        style=" height: 100vh; background-color: #D9AFD9; background-image: linear-gradient(0deg, #D9AFD9 0%, #97D9E1 100%);"

//     if($row["kullanici_adi"]==$username){
//     }if($row["parola"]==$password){
//       header("Location: index.php");
//       $_SESSION["user"]="admin";

//     }else{
//       echo '<div class="alert alert-danger" role="alert">Hatalı Giriş</div>';
//     }
//   }
// }

?>