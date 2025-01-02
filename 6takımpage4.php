<?php

session_start();
/*
if(isset($_SESSION["kullaniciadi"])){
    echo "Hoşgeldiniz ".$_SESSION["kullaniciadi"];
    echo "<br>";
    echo "Email adresiniz: ".$_SESSION["email"];
    echo "<br>";
    echo "<a href='cikis.php'>Çıkış yap</a>";
}
else{
    echo "Giriş yapmadınız.";
    echo "<br>";
    echo "<a href='giris.php'>Giriş yap</a>";
    echo "<br>";
    echo "<a href='kayit.php'>Kayıt ol</a>";
}*/

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Enkare Home</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" /> -->

        <link rel="stylesheet" href="style.css">
        <style>

            
/* Style for the dropdown container */
.user-dropdown {
position: relative;
}

/* Initially hide the dropdown menu */
.dropdown-menu {
display: none;
position: absolute;
top: 100%; /* Position it below the link */
left: 7px;
z-index: 10;
min-width: 140px;
padding: 10px 0;
background-color: #E3E6F3;
}

/* Style for individual dropdown items */
.dropdown-menu a {
display: block;
padding: 8px 15px;
text-decoration: none;
color: #333;
font-size: 14px;
}


/* Change background color on hover */
.dropdown-menu a:hover {
background-color: #E3E6F3;
}

/* Show dropdown menu on hover */
.user-dropdown:hover .dropdown-menu {
display: block;

}




</style>
    </head>

    <body>
        <section id="header">
        <a href="index.php"> <img src="img/enkarelogo.png" width="27%" height="27%" class="logo" alt=""></a>

<div class="menu_bar">
<ul id="navbar">
        <li> <a href="index.php">Ana Sayfa</a></li>
        <li> <a class= "active" href="4takımpage1.php">Mağaza <i class="fas fa-caret-down"></i></a>
        <div class="drowdown__menu">
            <ul>
                <li><a href="4takımpage1.php">4 Kişilik İç Mekan Takımlar</a></li>
                <li><a href="6takımpage1.php">6 Kişilik İç Mekan Takımlar</a></li>
                <li><a href="balkonbahce1.php">Balkon ve Bahçe Mobilyaları</a></li>
                
            </ul>
        </div>
        
        </li>
        <li> <a a href="blog.php">Blog</a></li>
        <li> <a href="about.php">Hakkımızda</a></li>
        <li> <a href="contact.php">İletişim</a></li>
        <li class="user-dropdown">
    <a href="index.php" class="user-link"  >
        <?php if(isset($_SESSION["kullaniciadi"])){
            echo "Hesabım";
        }
        else{
            echo "Giriş/Kayıt";
        }
        
         ?><i class="fas fa-caret-down"></i>
    </a>

    <div class="dropdown-menu">
         <?php  
        if(isset($_SESSION["kullaniciadi"])){
            echo "<a href='account.php'>" . $_SESSION["kullaniciadi"] . "</a>";
        } else {
            echo "<a href='giris.php'>Giriş</a>";
        }
        
        ?>
        </a>
        <?php  
        if(isset($_SESSION["kullaniciadi"])){
            echo "<a href='cikis.php'>Çıkış Yap</a>";
        }
        else{
            echo "<a href='kayit.php'>Kayıt Ol</a>";
        }
        ?>
        
    </div>
</li>
        <li id="lg-bag"> <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
        <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
    </ul>
</div>
<div id="mobile">
    
    <a href="cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
    <i id="bar" class="fas fa-outdent"></i>
</div>


        </section>
       

        <section class="kategoriadı">
            <h2>6 Kişilik İç Mekan Takımlar</h2>
        </section>

        <section id="product1" class="section-p1">
            
            <div class="pro-container">
                <div class="pro" onclick="window.location.href='6sproducts/6sproduct25.php';">
                    <img src="img/6kişilik fotolar/6.25.1.jpg" alt="" style="height: 340px;">
                    <div class="des">
                        <span>Enkare</span>
                        <h5>Elisa Masa Sandalye Takımı, 4 Kişilik Mutfak Masası, Teddy...</h5>
                        <div class="star"> 
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>8.900,00 TL</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro" onclick="window.location.href='6sproducts/6sproduct26.php';">
                    <img src="img/6kişilik fotolar/6.26.1.jpg" alt="">
                    <div class="des">
                        <span>Enkare</span>
                        <h5>Beyaz Küçük Mdf Masa, Elisa Sandalye Takımı, Açılabilir...</h5>
                        <div class="star"> 
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>11.900,00 TL</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro" onclick="window.location.href='6sproducts/6sproduct27.php';">
                    <img src="img/6kişilik fotolar/6.27.1.jpg" alt="">
                    <div class="des">
                        <span>Enkare</span>
                        <h5>Küçük Mdf Masa Takımı Vegas Düğün Sandalyesi,...</h5>
                        <div class="star"> 
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>7.474,86 TL</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro" onclick="window.location.href='6sproducts/6sproduct28.php';">
                    <img src="img/6kişilik fotolar/6.28.1.jpg" alt="">
                    <div class="des">
                        <span>Enkare</span>
                        <h5>Papatya Masa Sandalye Takımı, Mutfak Masası, Deri...</h5>
                        <div class="star"> 
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>9.373,94 TL</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro" onclick="window.location.href='6sproducts/6sproduct29.php';">
                    <img src="img/6kişilik fotolar/6.29.1.jpg" alt="">
                    <div class="des">
                        <span>Enkare</span>
                        <h5>Badem Masa Sandalye Takımı, 4 Kişilik Mutfak Masası, ...</h5>
                        <div class="star"> 
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>9.999,00 TL</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro" onclick="window.location.href='6sproducts/6sproduct30.php';">
                    <img src="img/6kişilik fotolar/6.30.1.jpg" alt="">
                    <div class="des">
                        <span>Enkare</span>
                        <h5>Gri Elisa Masa Sandalye Takımı, Mutfak Masası...</h5>
                        <div class="star"> 
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>8.900,00 TL</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro" onclick="window.location.href='6sproducts/6sproduct31.php';">
                    <img src="img/6kişilik fotolar/6.31.1.jpg" alt="" style="height: 340px;">
                    <div class="des">
                        <span>Enkare</span>
                        <h5>Antrasit Elisa Masa Sandalye Takımı, yuvarlak Mutfak....</h5>
                        <div class="star"> 
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>8.900,00 TL</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro" onclick="window.location.href='6sproducts/6sproduct32.php';">
                    <img src="img/6kişilik fotolar/6.32.1.jpg" alt="" style="height: 340px;">
                    <div class="des">
                        <span>Enkare</span>
                        <h5>Elisa Masa Sandalye Takımı, 4 Kişilik Mutfak Masası, Teddy...</h5>
                        <div class="star"> 
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>8.900,00 TL</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                
            </div>
        </section>

        <section id="pagination" class="section-p1">
            <a href="6takımpage1.php">1</a>
            <a href="6takımpage2.php">2</a>
            <a href="6takımpage3.php">3</a>
            <a href="6takımpage4.php" style="background-color: #134;">4</a>
            <a href="6takımpage5.php">5</a>
            <a href="6takımpage5.php"><i class="fa-solid fa-arrow-right-long"></i></a>

        </section>


        <section id="newsletter" class="section-p1 section-m1" >
            <div class="newstext">
                <h4>Haber Bülteni için Kayıt Olun</h4>
                <p>Son çıkan ürünlerimizden ve <span> özel tekliflerimizden</span> haberdar olmak için.</p>
            </div>
            <div class="form">
                <input type="text" placeholder="E-mail adresiniz">
                <button class="normal">Kayıt Ol</button>

            </div>

        </section>
        
        <footer class="section-p1">
            <div class="col">
                <img class="logo" src="img/enkarelogo.png" width="15%" height="20%" alt="">
                <h4>İletişim</h4>
                <p><strong>Adres:</strong> Sanayi, 6001. Cadde No:82, 38010 Kocasinan/Kayseri</p>
                <p><strong>Telefon:</strong>  +905062560926</p>
                <p><strong>Çalışma Saatleri:</strong> Pzt - Cts: 8:00 - 18:00, Pz: 12:00 - 16:00</p>

                <div class="follow">
                    <h4>Bizi Takip Edin</h4>
                    <div class="icon">
                        <a href="https://www.facebook.com/enkarehome/?profile_tab_item_selected=about&_rdr"><i class="fab fa-facebook-f"></i></a> 
                        <i class="fab fa-twitter"></i>
                        <a href="https://www.instagram.com/enkarehome/"><i class="fab fa-instagram"></i></a> 
                        <i class="fab fa-pinterest-p"></i>
                        <a href="https://www.youtube.com/@EnkareHome"><i class="fab fa-youtube"></i></a> 
                    </div>
                </div>
            </div>
            <div class="col">
                <h4>Hakkımızda</h4>
                <a href="about.php">Hakkımızda</a>
                <a href="#">Teslimat Bilgisi</a>
                <a href="#">Gizlilik Politikası</a>
                <a href="#">Şartlar & Koşullar</a>
                <a href="contact.php">İletişime Geçin</a>
            </div>
            <div class="col">
                <h4>Hesabım</h4>
                <a href="giris.php">Giriş Yapın</a>
                <a href="cart.php">Sepetimi Göster</a>
                <a href="#">İstek Listem</a>
                <a href="#">Siparişimi Takip Et</a>
                <a href="#">Yardım</a>
            </div>
            <div class="col install">
                <h4>Uygulamayı Yükle</h4>
                <p>App Store ya da Google Play'den</p>
                <div class="row">
                    <img src="img/pay/app.jpg" alt="">
                    <img src="img/pay/play.jpg" alt="">
                </div>
                <p>Güvenli Ödeme Seçenekleri</p>
                <img src="img/pay/pay.png" alt="">
            </div>
            <div class="copyright">
                <p>© 2022, Enkare Home - HTML CSS E-Ticaret Website</p>
            </div>
        </footer>

        <script src="script.js"></script>
    </body>

</html>
