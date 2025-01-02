<?php 

include("baglanti.php");

$username_err = "";
$parola_err = "";

$boolean = true;
if(isset($_POST["giris"])){
    //Kullaıcı adı kontrolü
    if(empty(trim($_POST["kullaniciadi"]))){
        $username_err = "Kullanıcı adı boş bırakılamaz.";
        $boolean = false;
    } 
    else {
        $kullaniciadi = trim($_POST["kullaniciadi"]);
    }

    //Parola kontrolü
    if(empty(trim($_POST["parola"]))){
        $parola_err = "Parola alanı boş bırakılamaz.";
        $boolean = false;
    } 
    else {
        $parola = trim($_POST["parola"]);
    }

    

  /*  if($boolean == false){
        echo '<div class="alert alert-danger" role="alert">
        Kayıt eklenirken bir sorun oluştu.
     </div>';
    }
    else
    {
    try {
        $sorgu = "INSERT INTO kullanicilar (kullanici_adi,email,parola) VALUES ('$kullaniciadi','$email','$parola')";
        $sonuc = mysqli_query($baglanti, $sorgu);

        if ($sonuc) {
            echo '<div class="alert alert-success" role="alert">
     Kayıt başarılı bir şekilde eklendi.
    </div>';
        } else {
            throw new Exception('Kayıt eklenirken bir problem oluştu.');
        }
    } catch (Exception $e) {
        echo '<div class="alert alert-danger" role="alert">
       Böyle bir kullanıcı bulunuyor farklı bir kullanıcı adı seçin.
    </div>';
    }
}*/
    
    if($boolean == false){
        echo '<div class="alert alert-danger" role="alert">
        Giriş işlemi sırasında bir hata oluştu.
         </div>';
    }
    else{

    $sorgu = "SELECT * FROM kullanicilar WHERE kullanici_adi = '$kullaniciadi' "; 
    $sonuc = mysqli_query($baglanti,$sorgu);

    $kayitsayisi = mysqli_num_rows($sonuc); //sonuc ya sıfırdır ya da birdir.

    if($kayitsayisi > 0){

        $ilgilikayit = mysqli_fetch_assoc($sonuc);
        $hashparola = $ilgilikayit["parola"];

        if(password_verify($parola,$hashparola)){
           /* echo '<div class="alert alert-success" role="alert">
            Giriş başarılı.
             </div>';*/
            session_start();
            $_SESSION["kullaniciadi"] = $ilgilikayit["kullanici_adi"];
            $_SESSION["email"] = $ilgilikayit["email"];

            header("Location: index.php");

        }
        else{
            echo '<div class="alert alert-danger" role="alert">
            Parola hatalı.
             </div>';
        }
    }
    else{
        echo '<div class="alert alert-danger" role="alert">
        Kullanıcı adı hatalı.
         </div>';
    }
}


    mysqli_close($baglanti);
    
} 


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Üye Giriş İşlemi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container p-5">
        <div class="card p-5 mt-5" style = "max-width: 700px; margin: 0 auto;">
                    <form action = "giris.php" method = "POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kullanıcı Adı</label>
                <input type="text" class="form-control
                
                <?php 
                if(!empty($username_err)){
                    echo "is-invalid";
                }
            
                ?>
                
                
                " id="exampleInputEmail1" name= "kullaniciadi">
                <div class="invalid-feedback">
                    <?php echo $username_err; ?>
                </div>
            </div>

            

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Parola</label>
                <input type="password" class="form-control

                 <?php 
                if(!empty($parola_err)){
                    echo "is-invalid";
                } 
                ?>
                
                
                
                " id="exampleInputPassword1" name = "parola">
                <div class="invalid-feedback">
                    <?php echo $parola_err; ?>
                </div>
            
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <button type="submit" name="giris" class="btn btn-primary">Giriş Yap</button>
                <div>
                    <span>Hesabınız yok mu?</span>
                    <a href="kayit.php" class="btn btn-secondary ms-2">Kayıt Ol</a>
                </div>
            </div>
            
           
            

            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>