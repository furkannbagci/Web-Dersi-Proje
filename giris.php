<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['email'],$_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
    }
    if ($email != 'b_furkan06@hotmail.com' || $password != 'b231210090'){
      header("Location: ./giriş.html");
      die();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"><!--tarayacının en son sürümünü kullanmasını sağlar-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--mobil için uyumlu-->
  
  <title>Giriş</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  
</head>
<body>

  <!-- Menü kısmı -->
  <nav class="navbar navbar-expand-lg navbar-dark navbar-fixed-top" style="background-image: url(görseller/josh.gif);">
    <div class="container">
      <a class="navbar-brand" style="font-size: x-large; font-family: sans-serif;" href="./anasayfa.html">Furkan Bağcı</a>
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu" aria-controls="navmenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
          
      <div class="collapse navbar-collapse" id="navmenu">
        <ul class="navbar-nav ms-auto">
          <li class="navbar-item">
            <a class="nav-link" aria-current="anasayfa" href="anasayfa.html">Ana Sayfa</a>
          </li>
          <li class="navbar-item">
            <a class="nav-link" href="./eğitim.html">Eğitim</a>
          </li>
          <li class="navbar-item">
            <a class="nav-link" href="./şehrim.html">Şehrim</a>
          </li>
          <li class="navbar-item">
            <a class="nav-link" href="./miras.html">Miras</a>
          </li>
          <li class="navbar-item">
            <a class="nav-link" href="./hobilerim.html">Hobilerim</a>
          </li>
          <li class="navbar-item">
            <a class="nav-link" href="./giriş.html">Giriş</a>
          </li>
          <li class="navbar-item">
            <a class="nav-link" href="./iletişim.html">İletişim</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--başlık-->
  <header class="text-light pt-4 pb-4" style="background-color: #353535;">
    <div class="container">
      <h1 style="font-size: 50px;">Giriş</h1>
    </div>
  </header>

  <!-- İçerik kısmı -->
  <div class="container col-xs-2 mt-4">
    <table class="tablo">
      <tr>
        <td>  <?php echo "hoşgeldiniz ". $password; ?></td>
      </tr>
    </table>
  </div>


  <div class="container">
    <br>
    <a href="https://github.com/furkannbagci">
      <img width="50px" height="50px" src="görseller/github.png" alt="">
    </a>
    <a href="mailto:furkan.bagci@ogr.sakarya.edu.tr">
      <img width="50px" height="50px" src="görseller/email.png" alt="">
    </a>
    <p> </p><br>
  
  </div>
<!--taban kısım-->
<footer class="text-light pt-3 pb-2" style="background-image: url(görseller/josh.gif);">
  <div class="container text-center" style="width: 100%;">
    <p> Web Teknolojileri Projesı - Furkan Bağcı 2024</p>
  </div>
</footer>

<style>
  .tablo{
    padding: 30px;
    margin-top: 20%;
    margin-bottom: 10%;
    margin-left: 40%;
    text-align: center;
    background-color: gray;
    font-size: 30px;
  }
</style>


  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
