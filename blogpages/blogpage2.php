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
                font-size: 2.3rem;
                margin: 20px;
                margin-left: 0px;
            }
            ul {
                list-style: none;
                padding: 0;
            }
            ul li {
                margin-bottom: 10px;
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
                <h1>Sandalyenize ve Masa Takımınıza Stil Vermenin 5 Yaratıcı Yolu</h1>
                <p>Bir sandalye ve masa takımı, yalnızca işlevsel bir mobilya değil; aynı zamanda mekanınızın tarzını ve atmosferini belirlemede önemli bir rol oynar. İşte bu mobilyalarınızı estetik açıdan geliştirmek için kullanabileceğiniz beş yaratıcı fikir:</p>
                
                <h2>1. Katmanlı Tekstiller Kullanın</h2>
                <p>Sandalye minderleri, masa örtüleri ve koşucular (runner) eklemek, mekanınıza sıcaklık ve doku kazandırır.</p>
                <ul>
                    <li><strong>Masa Örtüleri ve Koşucular:</strong> Şık bir masa koşucusu veya renkli bir masa örtüsü ekleyerek masanızın odak noktası olmasını sağlayabilirsiniz.</li>
                    <li><strong>Sandalye Minderleri:</strong> Renk veya desen eklemek için sandalyelerinize uygun minderler seçin. Özellikle mevsimsel değişikliklere göre minderlerinizi değiştirmek, mekânınızın havasını hızlıca yenilemenize yardımcı olur.</li>
                    
                </ul>
                
                <h2>2. Doğayı Davet Edin</h2>
                <p>Masanızın üzerine çiçek aranjmanları, küçük saksı bitkileri veya bir vazoda taze dallar yerleştirin.</p>
                <ul>
                    <li><strong>Doğal Malzemelerle Uyumluluk:</strong> Ahşap bir masa, bitkiler ve doğal elementlerle mükemmel bir uyum sağlar.</li>
                    <li><strong>Minimalist Yaklaşım:</strong> Çok fazla aksesuar kullanmadan, birkaç dikkat çekici bitkiyle sade bir şıklık elde edebilirsiniz.</li>
                    
                </ul>
                
                <h2>3. Aydınlatmayı Vurgulayın</h2>
                <p>Masa ve sandalyelerinizi şık bir avize veya modern bir sarkıt lamba ile vurgulayabilirsiniz.</p>
                <ul>
                    <li><strong>Doğru Aydınlatma:</strong> Masa boyutuna uygun bir aydınlatma seçerek alanın dengeli ve davetkâr görünmesini sağlayabilirsiniz.</li>
                    <li><strong>Mekâna Göre Stiller:</strong> Rustik, modern veya vintage tarzda aydınlatmalarla tarzınızı öne çıkarın.</li>
                    
                </ul>
                
                <h2>4. Dekoratif Aksesuarlarla Tamamlayın</h2>
                <p>Tabaklar, şamdanlar, peçetelikler veya sanat objeleriyle masanızı süsleyin.</p>
                <ul>
                    <li><strong>Merkez Parçaları:</strong> Masa için bir merkez parçası ekleyerek dekorasyonunuzu tamamlayabilirsiniz. Örneğin, şık bir vazo veya geometrik bir heykel iyi bir seçim olabilir.</li>
                    <li><strong>Renk Uyumunu Düşünün:</strong> Aksesuarlarınızın renklerini mekânın genel paletiyle uyumlu tutun.</li>
                </ul>
                
                <h2>5. Sandalyeleri Öne Çıkarın</h2>
                <p>Sandalye kılıfları veya boyama projeleriyle sandalyelerinizi daha dikkat çekici hale getirin.</p>
                <ul>
                    <li><strong>Özelleştirilmiş Kılıflar:</strong> Özellikle resmi bir atmosfer yaratmak için sandalyelerinizde kumaş kılıflar kullanabilirsiniz.</li>
                    <li><strong>Renk ve Desen:</strong> Sandalyelerinizi boyayarak veya desenli kumaşlarla kaplayarak benzersiz bir görünüm oluşturun.</li>
                    
                </ul>
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
                <a href="../about.html">Hakkımızda</a>
                <a href="#">Teslimat Bilgisi</a>
                <a href="#">Gizlilik Politikası</a>
                <a href="#">Şartlar & Koşullar</a>
                <a href="../contact.html">İletişime Geçin</a>
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