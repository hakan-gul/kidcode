<?php
session_start();
$con = mysqli_connect('localhost','root','','kidcode') or die('Unable To connect');
$username_err="";
if(isset($_POST["create"]))
{
  if(($_POST["user_name"]==""))
  {
    $username_err="kullanıcı adı boş geçilemez.";
  }
  $username=$_POST["user_name"];
  $name=$_POST["name"];
  $password=$_POST["password"];

  $ekle="INSERT INTO kullanicilar (user_name, name, password) VALUES ('$username', '$name', '$password')";
  $runAdd= mysqli_query($con, $ekle);   
  if($runAdd){
    echo '<div class="alert alert-success d-flex align-items-start flex-column" role="alert">Kayıt başarılı</div>';
    header("Location: login.php");
  }else{
    echo '<div class="alert alert-danger" role="alert">Kayıt başarısız</div>';
  }  
  mysqli_close($con);
}
  mysqli_close($con);
?>
<!doctype html>
<html lang="tr">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KidCode Üye Ol</title>
    <style>

    </style>

    
    <link href="./css/signin.css" rel="stylesheet">

  </head>
  <body class="text-center" style=" height: 100vh; background-color: #D9AFD9;
background-image: linear-gradient(0deg, #D9AFD9 0%, #97D9E1 100%);

  ">
    
<main class="form-signin">
  <div class="container">
    <form method="POST" action="signin.php" class="mb-5">
      <img class="mb-4" src="./images/logo-dark.png" alt="" style="max-width: 100% !important;
                        width: 287px !important;
                        height: 60px !important;">
      <h1 class="h3 mb-3 fw-normal" style="color:#3a3a3a">Hesap Oluştur</h1>

      <div class="form-floating">
        <input type="text" class="form-control" id="floatingInput" placeholder="Kullanıcı Adı" name="user_name">
        <label for="floatingInput">Kullanıcı Adı</label>
        <div class="invalid-feedback">
        <?php echo $username_err; ?>
      </div>  
      </div>
      <div class="form-floating">
        <input type="text" class="form-control is-invalid" id="floatingInput" placeholder="E-Posta" name="name">
        <label for="floatingInput">E-Posta</label>
        <!-- <div class="invalid-feedback">
        Kullanıcı Adı giriniz.
      </div>   -->
      </div>
      <div class="form-floating">
        <input type="password" class="form-control is-invalid" id="floatingPassword" placeholder="Şifre" name="password">
        <label for="floatingPassword">Şifre</label>
        <!-- <div class="invalid-feedback">
        Kullanıcı Adı giriniz.
      </div>   -->
      </div>
      <button class="w-100 btn btn-lg btn-light" type="submit" name="create">Oluştur</button>

    </form>
  </div>
  
  <a class="h3 mb-3 fw-normal mt-5" href="login.php" style="color:#3a3a3a; text-decoration:none; margin-top:100px">Zaten hesabın var mı?</a>



 
</main>