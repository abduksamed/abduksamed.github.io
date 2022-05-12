<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Giriş Yap</title>
</head>

<body>
  
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm">
            <div class="container">
              <a class="navbar-brand text-danger " href="./index.html">Ad Soyad</a>
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
                <form class="d-flex">
                  <button onclick="window.location='./login.html'" type="button" class="btn btn-danger">Giriş Yap</button>
                </form>
              </div>
            </div>
          </nav>
    </header>

    <main>
      <script>
      </script>
        <div class="container-lg py-5 align-items-center justify-content-center">
          <div class="row min-vh-100 justify-content-center">
            <div class="col-md-6  m-auto" style="height: 35rem; width: 70rem;">

            <div class="alert alert-primary" role="alert">
            <?php 
              if($_POST){
                $item=$_POST["form-ad"];
                echo("AD: ");
                echo($item);
              }    
              ?>
            </div>

            <div class="alert alert-secondary" role="alert">
            <?php 
              if($_POST){
                $item2=$_POST["form-soyad"];
                echo("SOYAD: ");
                echo($item2);
              }    
              ?>
            </div>

            <div class="alert alert-success" role="alert">
            <?php 
              if($_POST){
                $item3=$_POST["email"];
                echo("E-Mail: ");
                echo($item3);
              }    
              ?>
            </div>

            <div class="alert alert-danger" role="alert">
            <?php 
              if($_POST){
                $item4=$_POST["selected"];
                echo("Cinsiyet: ");
                echo($item4);
              }    
              ?>
            </div>

            <div class="alert alert-warning" role="alert">
            <?php 
              if($_POST){
                $item5=$_POST["form-mesaj"];
                echo("Mesaj: ");
                echo($item5);
              }    
              ?>
            </div>

            <div class="alert alert-warning" role="alert">
            <?php 
              if($_POST){
                $item6="";
                $item7="";
                $item8="";
                if(isset($_POST["inlineCheckbox1"])){
                  $item6=$_POST["inlineCheckbox1"];
                }
                if(isset($_POST["inlineCheckbox2"])){
                  $item7=$_POST["inlineCheckbox2"];
                }
                if(isset($_POST["inlineCheckbox3"])){
                  $item8=$_POST["inlineCheckbox3"];
                }
                echo($item7);
                echo("Diller: ");
                if($item6=="İngilizce"){
                  echo "$item6    ," ;
                }
                if($item7=="Rusça"){
                  echo "$item7    ," ;
                }
                if($item8=="Almanca"){
                  echo "$item8    ." ;
                }
              }    
              ?>
            </div>

          </div>
          </div>
        </div>
    </main>
    <script src="./js/bootstrap.js"></script>
</body>
</html>