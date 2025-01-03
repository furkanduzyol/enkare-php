<?php

session_start();

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

        <link rel="stylesheet" href="../style.css">
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

           /* body {
                font-family: Arial, sans-serif;
                line-height: 1.6;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                min-height: 100vh;
                background-color: #f9f9f9;
                color: #333;
            }*/
            .content {
                margin-top: -500px;
                padding: 20px;
                width: 100%;
                background: #fff;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                text-align: justify;
            }
            h1 {
                text-align: center;
                color: #2c3e50;
                font-size: 2.3rem;
                margin: 20px;
            }
            h2 {
                color: #34495e;
                font-size: 1.5rem;
                margin: 10px;
                margin-left: 0px;
            }
            
        </style>
    </head>

    <body>
    <section id="header">
            <a href="../index.php"> <img src="../img/enkarelogo.png" width="27%" height="27%" class="logo" alt=""></a>

            <div class="menu_bar">
            <ul id="navbar">
                    <li> <a href="../index.php">Ana Sayfa</a></li>
                    <li> <a href="../4takımpage1.php">Mağaza <i class="fas fa-caret-down"></i></a>
                    <div class="drowdown__menu">
                        <ul>
                            <li><a href="../4takımpage1.php">4 Kişilik İç Mekan Takımlar</a></li>
                            <li><a href="../6takımpage1.php">6 Kişilik İç Mekan Takımlar</a></li>
                            <li><a href="../balkonbahce1.php">Balkon ve Bahçe Mobilyaları</a></li>
                            
                        </ul>
                    </div>
                    
                    </li>
                    <li> <a class= "active" href="../blog.php">Blog</a></li>
                    <li> <a href="../about.php">Hakkımızda</a></li>
                    <li> <a href="../contact.php">İletişim</a></li>
                    <li class="user-dropdown">
    <a href="../index.php" class="user-link"  >
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
            echo "<a href='../account.php'>" . $_SESSION["kullaniciadi"] . "</a>";
        } else {
            echo "<a href='../giris.php'>Giriş</a>";
        }
        
        ?>
        </a>
        <?php  
        if(isset($_SESSION["kullaniciadi"])){
            echo "<a href='../cikis.php'>Çıkış Yap</a>";
        }
        else{
            echo "<a href='../kayit.php'>Kayıt Ol</a>";
        }
        ?>
        
    </div>
</li>
                    <li id="lg-bag"> <a href="../cart.php"><i class="fa-solid fa-cart-shopping"></i></a></li>
                    <a href="#" id="close"><i class="fa-solid fa-xmark"></i></a>
                </ul>
            </div>
            <div id="mobile">
                
                <a href="../cart.php"><i class="fa-solid fa-cart-shopping"></i></a>
                <i id="bar" class="fas fa-outdent"></i>
            </div>

        </section>
        <section id="page-header" class="blog-header" style="background-image: url(img/blog2.jpg);">
           
        </section>
       

        <section id="blog">
            <div class="content" >
                <h1>Yemek Masası ve Sandalye Takımı Hackleri</h1>
        <p><strong>Giriş:</strong> Yemek masası ve sandalyeleri, evin en önemli mobilyalarından biridir. Zamanla aşınma ve yıpranma, eski yemek masası ve sandalye takımlarını kullanılmaz hale getirebilir. Ancak bu eski mobilyaları, yaratıcı "hackler" ile yeniden hayata döndürebilirsiniz. Eski takımlarınızı dönüştürerek hem şık hem de işlevsel hale getirmek mümkün. İşte eski yemek masası ve sandalyeleriniz için bazı yaratıcı fikirler.</p>

        <h2>Ahşap Masaları Yeniden Boyamak</h2>
        <p>Eski ahşap yemek masası takımlarınızı, yeni bir görünüm için boyamak en kolay ve etkili yöntemlerden biridir. İlk olarak, masanın yüzeyindeki eski boya veya verniği zımparalayarak çıkarın. Ardından, seçtiğiniz renk ile masanızı boyayın. Ahşap dokusunu vurgulamak isterseniz, açık renkler ve doğal tonlar tercih edebilirsiniz. Metal ayaklı masalar için de mat siyah veya altın renkleri harika seçeneklerdir.</p>

        <h2>Eski Sandalyelere Yeni Kumaş Kapatma</h2>
        <p>Eski sandalyelerinizi yenilemek için, minderlerini çıkartın ve yeni bir kumaşla kaplayın. Desenli, canlı renkler veya şık bir kadife kumaşla sandalyelerinize taze bir hava katabilirsiniz. Kumaşları düzgün bir şekilde yerleştirdikten sonra, fazlalık kısmı sıkıca tutturun ve sandalyenizin yeni görünümünü keyifle kullanın.</p>

        <h2>Masa Ayaklarını Değiştirme</h2>
        <p>Eski bir yemek masası takımı, sadece ayaklarını değiştirerek tamamen yeni bir görünüme kavuşabilir. Ahşap ayakları modern metal ayaklarla değiştirmek veya tersine, metal ayakları eski tarz ahşap ayaklarla değiştirmek, masanın tarzını tamamen değiştirebilir. Bu, masanızı daha şık ve çağdaş bir hale getirebilir.</p>

        <h2>Yemek Masasına Cam Üst Kapak Eklemek</h2>
        <p>Eski yemek masanızın üzerine şeffaf bir cam kapak yerleştirmek, hem koruma sağlar hem de masanızı modern bir dokunuşla yeniler. Ahşap masanın üzerine cam yerleştirmek, onun orijinal dokusunu sergilemenin yanı sıra, masanın kolayca temizlenmesini sağlar. Ayrıca, masanızın üzerine ilginç desenler veya yerleştirilen objelerle de görsel olarak zenginleştirebilirsiniz.</p>

        <h2>Karmaşık Desenler ve Yenilikçi Süslemeler</h2>
        <p>Masa yüzeyini farklı boyama teknikleriyle süsleyebilirsiniz. Örneğin, şablonlar kullanarak desenler yaratabilir veya boyama işlemi ile eski sandalyelere renkli motifler ekleyebilirsiniz. Geometrik şekiller, floral desenler veya retro tasarımlar, masanızı modern bir sanat eserine dönüştürebilir.</p>

        <h2>Eski Mobilyalarınızı Kendi Stilinizle Birleştirin</h2>
        <p>Eski mobilyalarınızı kişiselleştirmek için, onları tam olarak ihtiyaçlarınıza göre modifiye edebilirsiniz. Sandalyelere kol dayama yerleri eklemek, masanın altına çekmeceler yerleştirmek gibi ilginç ve pratik fikirlerle yemek takımlarınızı fonksiyonel hale getirebilirsiniz. Böylece hem estetik hem de işlevsel olarak evinize yeni bir soluk getirmiş olursunuz.</p>

        <hr>
        <p><strong>Sonuç:</strong> Eski yemek masası ve sandalye takımlarını yenilemek, hem çevre dostu bir seçenek hem de estetik açıdan evinize yeni bir hava katabilir. Bu tür yenilemeler, eski mobilyaları kullanmaya devam etmenize olanak tanırken, onların şıklığını da artırabilir. Kendi yaratıcı dokunuşlarınızı ekleyerek, yemek masası takımlarınızı modern bir görünüme kavuşturabilirsiniz.</p>
            </div>
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
                <img class="logo" src="../img/enkarelogo.png" width="15%" height="20%" alt="">
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
                <a href="../about.php">Hakkımızda</a>
                <a href="#">Teslimat Bilgisi</a>
                <a href="#">Gizlilik Politikası</a>
                <a href="#">Şartlar & Koşullar</a>
                <a href="../contact.php">İletişime Geçin</a>
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
                    <img src="../img/pay/app.jpg" alt="">
                    <img src="../img/pay/play.jpg" alt="">
                </div>
                <p>Güvenli Ödeme Seçenekleri</p>
                <img src="../img/pay/pay.png" alt="">
            </div>
            <div class="copyright">
                <p>© 2022, Enkare Home - HTML CSS E-Ticaret Website</p>
            </div>
        </footer>


        <script src="../script.js"></script>
    </body>

</html>
