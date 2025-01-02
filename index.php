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
                    <li> <a class= "active" href="index.php">Ana Sayfa</a></li>
                    <li> <a href="4takımpage1.php">Mağaza <i class="fas fa-caret-down"></i></a>
                    <div class="drowdown__menu">
                        <ul>
                            <li><a href="4takımpage1.php">4 Kişilik İç Mekan Takımlar</a></li>
                            <li><a href="6takımpage1.php">6 Kişilik İç Mekan Takımlar</a></li>
                            <li><a href="balkonbahce1.php">Balkon ve Bahçe Mobilyaları</a></li>
                            
                        </ul>
                    </div>
                    
                    </li>
                    <li> <a href="blog.php">Blog</a></li>
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

        <section id="hero">
            <h4>Eskiyi Getir, Yeniyi Götür</h4>
            <h2>Eviniz için En İyisi</h2>
            <h1>Hayalinizdeki Ürünlere Kolayca Ulaşın</h1>
            <p>Kuponlarla Daha Çok Kazanın & %30'e kadar indirim!</p>
            <a href="4takımpage1.php"><button>Alışveriş Yap</button></a>
        </section>

        <section id="feature" class="section-p1">
            <div class="fe-box">
                <img src="img/features/f1.png" alt="">
                <h6>Ücretsiz Kargo</h6>
            </div>
            <div class="fe-box">
                <img src="img/features/f2.png" alt="">
                <h6>Online Sipariş</h6>
            </div>
            <div class="fe-box">
                <img src="img/features/f3.png" alt="">
                <h6>Paradan Tasarruf Et</h6>
            </div>
            <div class="fe-box">
                <img src="img/features/f4.png" alt="">
                <h6>Özel Promosyonlar</h6>
            </div>
            <div class="fe-box">
                <img src="img/features/f5.png" alt="">
                <h6>Mutlu Satış</h6>
            </div>
            <div class="fe-box">
                <img src="img/features/f6.png" alt="">
                <h6>7/24 Destek Hattı</h6>
            </div>
        </section>

        <section id="product1" class="section-p1">
            <h2>Öne Çıkan Ürünler</h2>
            <p>Kış Koleksiyonu Yeni Modern Tasarım</p>
            <div class="pro-container">
                <div class="pro" onclick="window.location.href='4sproducts/4sproduct1.php';">
                    <img src="img/4kişilik fotolar/4.1.1.jpg" alt="">
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
                <div class="pro" onclick="window.location.href='4sproducts/4sproduct5.php';">
                    <img src="img/4kişilik fotolar/4.5.1.jpg" alt="">
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
                <div class="pro" onclick="window.location.href='4sproducts/4sproduct9.php';">
                    <img src="img/4kişilik fotolar/4.9.1.jpg" alt="">
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
                <div class="pro" onclick="window.location.href='4sproducts/4sproduct13.php';">
                    <img src="img/4kişilik fotolar/4.13.1.jpg" alt="">
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
                <div class="pro" onclick="window.location.href='4sproducts/4sproduct17.php';">
                    <img src="img/4kişilik fotolar/4.17.1.jpg" alt="">
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
                <div class="pro" onclick="window.location.href='4sproducts/4sproduct21.php';">
                    <img src="img/4kişilik fotolar/4.21.1.jpg" alt="">
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
                <div class="pro" onclick="window.location.href='4sproducts/4sproduct24.php';">
                    <img src="img/4kişilik fotolar/4.24.1.jpg" alt="">
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
                <div class="pro" onclick="window.location.href='4sproducts/4sproduct25.php';">
                    <img src="img/4kişilik fotolar/4.25.1.jpg" alt="">
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

        <section id="banner" class="section-m1">
            <h4>Tamir Servisleri</h4>
            <h2>Yeni Yıl Fırsatları Başladı! Tüm Masa ve Sandalyelerde <span>%30'a</span> Varan İndirim</h2>
            <a href="4takımpage1.php"><button class="normal">Daha fazla keşfet</button></a>

            

        </section>

        <section id="product1" class="section-p1">
            <h2>Yeni Çıkanlar</h2>
            <p>Kış Koleksiyonu Yeni Modern Tasarım</p>
            <div class="pro-container">
                <div class="pro" onclick="window.location.href='6sproducts/6sproduct1.php';">
                    <img src="img/6kişilik fotolar/6.1.1.jpg" alt="">
                    <div class="des">
                        <span>Enkare</span>
                        <h5>Beyaz Ayaklı Çam Desen Küçük Mdf Masa, Açılabilir Mutfak Masası,...</h5>
                        <div class="star"> 
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>5.499,00 TL</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                
                <div class="pro" onclick="window.location.href='6sproducts/6sproduct6.php';">
                    <img src="img/6kişilik fotolar/6.6.1.jpg" alt="">
                    <div class="des">
                        <span>Enkare</span>
                        <h5>Siyah Ayaklı Çam Desen Küçük Mdf Masa, Açılabilir Mutfak Masası,...</h5>
                        <div class="star"> 
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>5.499,00 TL</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro" onclick="window.location.href='6sproducts/6sproduct11.php';">
                    <img src="img/6kişilik fotolar/6.11.1.jpg" alt="">
                    <div class="des">
                        <span>Enkare</span>
                        <h5>Beyaz Ayaklı Küçük Mdf Masa, Açılabilir Mutfak Masası, 4 Kişilik Yemek...</h5>
                        <div class="star"> 
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>5.499,00 TL</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro" onclick="window.location.href='6sproducts/6sproduct16.php';">
                    <img src="img/6kişilik fotolar/6.16.1.jpg" alt="">
                    <div class="des">
                        <span>Enkare</span>
                        <h5>Siyah Ayaklı Küçük Mdf Masa, Açılabilir Mutfak Masası, 4 Kişilik Yemek...</h5>
                        <div class="star"> 
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>5.499,00 TL</h4>
                    </div>
                    <a href="#"><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
                <div class="pro" onclick="window.location.href='sbalkonbahce/8sproduct1.php';">
                    <img src="img/balkonbahce/8.1.1.jpg" alt="">
                    <div class="des">
                        <span>Enkare</span>
                        <h5>Karamel Elisa Masa Sandayle Takımı, 4 Kişilik Mutfak...</h5>
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
                <div class="pro" onclick="window.location.href='sbalkonbahce/8sproduct4.php';">
                    <img src="img/balkonbahce/8.4.1.jpg" alt="">
                    <div class="des">
                        <span>Enkare</span>
                        <h5>Karamel Elisa Masa Sandayle Takımı, 4 Kişilik Mutfak...</h5>
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
                <div class="pro" onclick="window.location.href='sbalkonbahce/8sproduct8.php';">
                    <img src="img/balkonbahce/8.8.1.jpg" alt="">
                    <div class="des">
                        <span>Enkare</span>
                        <h5>Karamel Elisa Masa Sandayle Takımı, 4 Kişilik Mutfak...</h5>
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
                <div class="pro" onclick="window.location.href='sbalkonbahce/8sproduct11.php';">
                    <img src="img/balkonbahce/8.11.1.jpg" alt="">
                    <div class="des">
                        <span>Enkare</span>
                        <h5>Karamel Elisa Masa Sandayle Takımı, 4 Kişilik Mutfak...</h5>
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
<!--
        <section id="sm-banner" class="section-p1">
            <div class="banner-box">
                <h4>crazy deals</h4>
                <h2>buy 1 get 1 free</h2>
                <span>The best classic dress is on sale at cara</span>
                <button class="white">Learn More</button>
                
            </div>
            <div class="banner-box banner-box2">
                <h4>spring/summer</h4>
                <h2>upcoming season</h2>
                <span>The best classic dress is on sale at cara</span>
                <button class="white">Collection</button>
                
            </div>
        </section>

        <section id="banner3">
            <div class="banner-box">
                <h2>SEASONAL SALE</h2>   
                <h3>Winter Collection -50% OFF</h3>
            </div>
            <div class="banner-box banner-box2">
                <h2>NEW FOOTWEAR COLLECTION</h2>   
                <h3>Spring/Summer 2024</h3>
            </div>
            <div class="banner-box banner-box3">
                <h2>T-SHIRTS</h2>   
                <h3>Nex Trendy Prints</h3>
            </div>
            -->

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
                <a href="#">Giriş Yapın</a>
                <a href="#">Sepetimi Göster</a>
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
