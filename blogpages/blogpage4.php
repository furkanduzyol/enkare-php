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
                <h1>Yemek Masası Takımlarının Tarihi</h1>
                <p><strong>Giriş:</strong> Yemek masaları ve sandalyeleri, yalnızca işlevsel mobilya parçaları olmanın ötesinde derin bir tarihi anlam taşır. Basit taş bloklardan gösterişli ahşap başyapıtlara kadar, yemek mobilyaları yüzyıllar boyunca sosyal normlara, zanaatkarlıkta yapılan ilerlemelere ve hatta ekonomik faktörlere bağlı olarak evrim geçirmiştir. Bu makalede, yemek masası takımlarının büyüleyici tarihini keşfedeceğiz.</p>
        
                <h2>Erken Başlangıçlar: Antik Uygarlıklar</h2>
                <p>İlk yemek masaları, Antik Mısır gibi eski uygarlıklarda ortaya çıkmıştır. Bu masalar genellikle ahşap, taş veya metalden yapılır ve hem yemek yeme hem de tören amaçlı kullanılırdı. Antik Mısır yemek masaları oldukça alçaktı, insanlar yere oturarak yemek yerdi; bu, birçok Doğu kültüründe hala uygulanan bir gelenekti. Böyle masaların kullanımı, zenginlik ve statü simgesi olarak kabul edilirdi, çünkü daha varlıklı aileler ince işçilikle yapılmış parçalara sahipti.</p>
        
                <h2>Antik Roma ve Yunan: Şölen Masalarının Yükselişi</h2>
                <p>Klasik döneme geçildiğinde, Yunanlılar ve Romalılar daha resmi yemek ortamları yaratmaya başladılar. Romalılar, genellikle sandalyeler ve banklarla çevrili büyük, dikdörtgen yemek masalarını tanıttı. Bu, bugün modern yemek takımı olarak bildiğimiz şeklin ilk örnekleriydi. Bu masalar, genellikle ceviz gibi zengin ahşaplardan yapılırdı ve yemek masalarının bir araya gelme ve sosyalize olma yeri olarak önemi artmaya başladı.</p>
        
                <h2>Ortaçağ ve Rönesans Dönemi: Resmi Yemek Alışkanlıklarına Geçiş</h2>
                <p>Ortaçağ’da yemekler giderek daha resmi hale geldi. "Şölen salonu" kavramı şekillendi ve büyük, ağır meşe masalar standart haline geldi. Ancak sandalyeler hala sadece varlıklı insanlar için lüks eşya olarak kabul edilirdi. Rönesans döneminde ise yemek masası, evin odak noktası haline geldi; aile ve sosyal statüye verilen önemin bir yansımasıydı. Hem masalarda hem de sandalyelerde detaylı oymalar ve süslü tasarımlar ortaya çıkmaya başladı.</p>
        
                <h2>Sanayi Devrimi: Seri Üretim ve Erişilebilirlik</h2>
                <p>19. yüzyılda Sanayi Devrimi ile birlikte, mobilya üretimi çok daha verimli hale geldi. İşte bu dönemde yemek takımlarının seri üretimi başladı. Masalar artık meşe, akçaağaç gibi bir dizi malzemeden üretiliyordu ve sandalyeler sadece zenginler için değil, daha geniş halk kitleleri için de erişilebilir hale geldi. Yemek takımları, orta sınıfın büyüyen talebini karşılamak için daha uygun fiyatlı ve pratik mobilyalar olarak tasarlandı. Bu dönemde yemek takımları, günümüzdeki şekline doğru evrimleşmeye başladı.</p>
        
                <h2>Modern Zaman: Minimalizm, Fonksiyonellik ve Tarz</h2>
                <p>20. ve 21. yüzyıllarda yemek masası takımları, modern zevklere göre evrim geçirdi. Bugün, minimalist İskandinav tasarımlarından vintage ilhamlı modellere kadar geniş bir stil yelpazesi mevcut. Malzeme seçenekleri cam, metal ve hatta akrilik gibi yeni materyallerle çeşitlendi. Yemek masaları artık yuvarlak, oval ve dikdörtgen gibi çeşitli şekillerde üretiliyor, her biri farklı yaşam alanlarına hitap etmek için tasarlanıyor. Ayrıca yenilikçi tasarımlar, kompakt veya uzatılabilir masalar gibi seçeneklerle, bugünün dinamik yaşam tarzlarına uyum sağlıyor.</p>
        
                <hr>
                <p><strong>Sonuç:</strong> Yemek masası takımlarının tarihi, geniş sosyal, ekonomik ve kültürel eğilimleri yansıtır. Başlangıçta sadece bir yemek yeme yüzeyi olarak kullanılan yemek masası, zamanla sosyal statünün, aile birliğinin ve zanaatın simgesine dönüşmüştür. Yemek takımlarının tarihini anlamak, bugün evlerimizi güzelleştiren bu parçaların sanatsal ve geleneksel değerini takdir etmemize yardımcı olur.</p>
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
