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
                    <li> <a class= "active" href="contact.php">İletişim</a></li>
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
        
        <section id="contact-details" class="section-p1">
            <div class="details">
                <span>İLETİŞİME GEÇ!</span>
                <h2>Acente lokasyonlarımızdan birini ziyaret edin veya bizimle iletişime geçin</h2>
                <h3>Merkez Ofis</h3>
                <div>
                    <li>
                        <i class="fa-solid fa-map"></i>
                        <p>Sanayi, 6001. Cadde No:82, 38010 Kocasinan/Kayseri</p>
                    </li>
                    <li>
                        <i class="far fa-envelope"></i>
                        <p>enkarehome@gmail.com</p>
                    </li>
                    <li>
                        <i class="fas fa-phone"></i>
                        <p>+905062560926</p>
                    </li>
                    <li>
                        <i class="far fa-clock"></i>
                        <p>
                            Çalışma Saatleri; 
                            
                            Pzt - Cts: 8:00 - 18:00, 
                            
                            Pz: 12:00 - 16:00</p>
                    </li>
                </div>
            </div>
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1850.8446609493076!2d35.47215072498524!3d38.723840344105234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152b111fa3bb4751%3A0x412bc80e90e4a010!2sEnkare%20Home!5e0!3m2!1str!2str!4v1728697905328!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </section>

        <section id="form-details">
            <form action="https://formsubmit.co/duzyol975337@gmail.com" method="POST">
                <span>BİR MESAJ BIRAK!</span>
                <h2>Senden haber almayı seviyoruz</h2>

                <input type="hidden" name="_subject" value="Siteden Yeni Mail Geldi!">
                <input type="text" name="name" placeholder="Adınız" required>
                <input type="email" name="email" placeholder="E-mail" required>
                <!--<input type="hidden" name="_next" value="https://yourdomain.co/thanks.html"> -->
                <input type="text" placeholder="Konu" required>
                <textarea name="MESSAGE" id="" rows = "10" cols = "30" placeholder="Mesajınızı buraya yazın" required></textarea>
                <button class="normal" type="submit">Gönder</button>
               
                <input type="hidden" name="_captcha" value="false">
                <input type="hidden" name="_next" value="https://furkanduzyol.github.io/Enkare-E-Commerce-Website/contact.html">

            </form>
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
                <a href="about.html">Hakkımızda</a>
                <a href="#">Teslimat Bilgisi</a>
                <a href="#">Gizlilik Politikası</a>
                <a href="#">Şartlar & Koşullar</a>
                <a href="contact.html">İletişime Geçin</a>
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
