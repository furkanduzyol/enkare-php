<?php 

include("baglanti.php");

$username_err = "";
$email_err = "";
$parola_err = "";

$boolean = true;
if(isset($_POST["kaydet"])){
    //Kullaıcı adı kontrolü
    if(empty(trim($_POST["kullaniciadi"]))){
        $username_err = "Kullanıcı adı boş bırakılamaz.";
        $boolean = false;
    } 
    else if(strlen(trim($_POST["kullaniciadi"])) < 6){
        $username_err = "Kullanıcı adı en az 6 karakter olmalıdır.";
        $boolean = false;
    }
    else if(!preg_match('/^[a-z\d_]{5,20}$/i', trim($_POST["kullaniciadi"]))){
        $username_err = "Kullanıcı adı sadece harf ve rakam içerebilir.";
        $boolean = false;
        } 
    else {
        $kullaniciadi = trim($_POST["kullaniciadi"]);
    }

    //Email kontrolü
    if(empty(trim($_POST["email"]))){
        $email_err = "Email alanı boş bırakılamaz.";
        $boolean = false;
    } 
    else if(!filter_var(trim($_POST["email"]), FILTER_VALIDATE_EMAIL)){
        $email_err = "Geçerli bir email adresi giriniz.";
        $boolean = false;
    } 
    else {
        $email = trim($_POST["email"]);
    }

    //Parola kontrolü
    if(empty(trim($_POST["parola"]))){
        $parola_err = "Parola alanı boş bırakılamaz.";
        $boolean = false;
    } 
    else if(strlen(trim($_POST["parola"])) < 6){
        $parola_err = "Parola en az 6 karakter olmalıdır.";
        $boolean = false;
    }
    else if(trim($_POST["parola"]) != trim($_POST["parolatkr"]))
    {
        $parola_err = "Parolalar eşleşmiyor.";
        $boolean = false;
    }
    else {
        $parola = password_hash(trim($_POST["parola"]), PASSWORD_DEFAULT);
    }

    

    if($boolean == false){
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
}
    mysqli_close($baglanti);
} 


?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Üye Kayıt İşlemi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container p-5" >
        <div class="card p-5 mt-5" style = "max-width: 700px; margin: 0 auto;">
                    <form action = "kayit.php" method = "POST">
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
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="text" class="form-control
                
                 <?php 
                if(!empty($email_err)){
                    echo "is-invalid";
                } 
                
                ?>

                
                
                " id="exampleInputEmail1" name= "email">
                <div class="invalid-feedback">
                    <?php echo $email_err; ?>
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

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Parola Onayla</label>
                <input type="password" class="form-control
                
                 <?php 
                if(!empty($parola_err)){
                    echo "is-invalid";
                } 
                ?>
                
                
                
                " id="exampleInputPassword1" name = "parolatkr">
                <div class="invalid-feedback">
                    <?php echo $parola_err; ?>
                </div>
            
            </div>
            
            <div class="d-flex justify-content-between align-items-center">
                <button type="submit" name="kaydet" class="btn btn-primary">Kayıt Ol</button>
                <div>
                    <span>Zaten hesabınız var mı?</span>
                    <a href="giris.php" class="btn btn-secondary ms-2">Giriş Yap</a>
                </div>
            </div>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>