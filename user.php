<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Kullanıcı</title>
</head>
<body>

    <header>

    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
            <div class="container">
              <a class="navbar-brand text-danger " href="./index.html">Ad soyad</a>
              <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active " href="./index.html">Hakkımda</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active " href="./ozgecmis.html">Özgeçmiş</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active " href="./ilgialanlarim.html">İlgi Alanlarım</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active " href="./sehirim.html">Şehirim</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active " href="./mirasimiz.html">Mirasımız</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active " href="./iletisim.html">iletişim</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>

    <main>
      <div class="container-lg py-5 align-items-center justify-content-center">
        <div class="row min-vh-100 justify-content-center">
          <div class="col-md-6 bg  m-auto p-0 " style="height: 20rem; width: 30rem;">
            <img src="./img/login/wellcome.svg" alt="" style="height: 20rem; width: 30rem;">
          </div>
          <div class="col-md-6  m-auto p-0"style="height: 20rem;width: 30rem;">
            <div class="card">
              <h3 class="text-center align-items-center">HOŞ GELDİNİZ </h3>
              <hr>
              <div class="card-body">
              <?php 
              if($_POST){
                $user=$_POST["email"];
                $pass=$_POST["password"];
                $dizi=explode("@",$user);
                
                if($dizi[1]=="sakarya.edu.tr"){
                  if($dizi[0]==$_POST["password"]){
                  }else{
                    header("Refresh: 2; url=login.html");
                    echo "Kullancı Adı veya Şifre Yanlış.<br>";
                  }
                }else{
                  header("Refresh: 2; url=login.html");
                  echo "Kullancı Adı veya Şifre Yanlış.<br>";
                }
              }    
              ?>
              <div class="alert alert-success text-center" role="alert">
            <?php 
              if($_POST){
                $item2=$_POST["password"];
                echo($item2);
              }    
              ?>
            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </main>

    <script src="./js/bootstrap.js"></script>
</body>
</html>