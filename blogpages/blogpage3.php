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
                <h1>Eviniz İçin Mükemmel Sandalye ve Masa Takımını Nasıl Seçersiniz?</h1>
                <p>Doğru sandalye ve masa takımı seçimi, hem estetik hem de işlevsellik açısından önemlidir. İşte seçim yaparken dikkate almanız gereken unsurlar:</p>
                
                <h2>1. Alanınızı Değerlendirin</h2>
                <ul>
                    <li><strong>Ölçülerinizi Alın:</strong> Masanızı ve sandalyelerinizi yerleştireceğiniz alanın tam ölçülerini alın. Mobilyalarınızın hareket alanını kısıtlamaması önemlidir.</li>
                    <li><strong>Açık Alanlar için:</strong> Daha geniş bir masa ve fazla sayıda sandalye tercih edebilirsiniz.</li>
                    <li><strong>Küçük Alanlar için:</strong> Katlanabilir masalar veya köşe takımları gibi yerden tasarruf sağlayan modeller seçin.</li>
                </ul>
                
                <h2>2. Malzeme Seçimi</h2>
                <p>Mobilya malzemesi hem dayanıklılığı hem de estetik özellikleri belirler.</p>
                <ul>
                    <li><strong>Ahşap:</strong> Doğal ve sıcak bir atmosfer oluşturur, dayanıklıdır ve çeşitli dekorasyon stillerine uyum sağlar.</li>
                    <li><strong>Metal:</strong> Modern ve endüstriyel bir görünüm sunar. Aynı zamanda kolay temizlenebilir ve dayanıklıdır.</li>
                    <li><strong>Cam:</strong> Şık ve hafif bir his verir, küçük alanları daha geniş gösterebilir.</li>
                </ul>
                
                <h2>3. Tarzınızı Belirleyin</h2>
                <ul>
                    <li><strong>Klasik:</strong> Ahşap detaylar ve oyma işçilik gibi zarif dokunuşlarla klasik bir görünüm tercih edebilirsiniz.</li>
                    <li><strong>Modern:</strong> Minimal çizgiler, nötr tonlar ve metalik detaylarla çağdaş bir hava yaratabilirsiniz.</li>
                    <li><strong>Rustik veya Bohem:</strong> Doğal dokular, pastel tonlar ve el yapımı detaylarla sıcak ve samimi bir ortam oluşturabilirsiniz.</li>
                </ul>
                
                <h2>4. Ergonomi ve Konfor</h2>
                <p>Uzun süreli kullanımlarda rahatsızlık hissetmemek için ergonomik mobilyalar tercih edin.</p>
                <ul>
                    <li><strong>Sandalyelerde Bel Desteği:</strong> Sandalyelerin ergonomik tasarıma sahip olmasına dikkat edin. Yumuşak minderli modeller daha fazla konfor sağlar.</li>
                    <li><strong>Masaların Yüksekliği:</strong> Masanızın yüksekliğinin, sandalyelerinizle uyumlu olması önemlidir.</li>
                </ul>
                
                <h2>5. Bütçenizi Planlayın</h2>
                <p>Sandalye ve masa takımı alırken, bütçenizi aşmadan kaliteli seçeneklere yönelmek önemlidir.</p>
                <ul>
                    <li><strong>Fiyat ve Dayanıklılık:</strong> Ucuz seçenekler başlangıçta çekici görünebilir, ancak uzun vadede dayanıklılık açısından sizi hayal kırıklığına uğratabilir.</li>
                    <li><strong>Mİkinci El Alternatifler:</strong> Kaliteli ve şık bir seçenek arıyorsanız, ikinci el mobilya mağazalarını veya antika dükkanlarını ziyaret edin.</li>
                    
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
