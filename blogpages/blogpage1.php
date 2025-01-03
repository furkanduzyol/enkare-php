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
                <h1>Ahşap Masa ve Sandalyelerinizi Nasıl Korursunuz?</h1>
                <p>Ahşap mobilyalar, her mekâna zamansız bir zarafet katar; ancak, güzel görünümünü yıllarca korumak için doğru bakım gereklidir. İşte ahşap masa ve sandalyelerinizi temizlemek, cilalamak ve korumak için temel ipuçları:</p>
                
                <h2>1. Düzenli Temizlik</h2>
                <ul>
                    <li><strong>Toz Almayı İhmal Etmeyin:</strong> Yumuşak bir mikrofiber bezle yüzeyi nazikçe silin. Ahşabı çizebilecek aşındırıcı malzemelerden kaçının.</li>
                    <li><strong>Dökülenleri Hemen Temizleyin:</strong> Ahşap mobilyalar lekelere ve su izlerine karşı hassastır. Dökülmeler olduğunda hemen kuru veya hafif nemli bir bezle silin.</li>
                    <li><strong>Hafif Temizlik Çözeltisi:</strong> Daha derin temizlik için birkaç damla hafif bulaşık deterjanını ılık suyla karıştırın. Bezi bu çözeltiyle hafifçe nemlendirin, sıkarak fazla suyunu alın ve ahşabı nazikçe silin. Ardından su hasarını önlemek için kuru bir bezle kurulayın.</li>
                </ul>
                
                <h2>2. Cilalama ile Parlaklık Kazandırın</h2>
                <ul>
                    <li><strong>Doğru Ürünü Seçin:</strong> Ahşap için özel olarak üretilmiş bir cila veya balmumu kullanın. Silikon bazlı spreylerden kaçının, çünkü kaygan bir birikime neden olabilirler.</li>
                    <li><strong>Uygulama İpuçları:</strong> Temiz ve yumuşak bir beze az miktarda cila uygulayın. Ahşaba dairesel hareketlerle sürün ve ardından kuru bir bezle parlatın.</li>
                    <li><strong>Sıklık:</strong> Ahşap mobilyalarınızı kullanım durumuna bağlı olarak 6-12 ayda bir cilalayın.</li>
                </ul>
                
                <h2>3. Hasarlardan Koruma</h2>
                <ul>
                    <li><strong>Altlık ve Amerikan Servisi Kullanın:</strong> Lekeleri, bardak izlerini ve ısı hasarını önlemek için içeceklerin altına altlık, sıcak tabakların altına Amerikan servisi koyun.</li>
                    <li><strong>Doğrudan Güneş Işığından Kaçının:</strong> Sürekli güneşe maruz kalmak, ahşabın solmasına neden olabilir. Perdeler veya jaluzilerle mobilyalarınızı koruyun.</li>
                    <li><strong>Nem Seviyesini Kontrol Edin:</strong> Odanın nem seviyesini orta düzeyde tutarak ahşabın eğilmesini veya çatlamasını önleyin. Nemlendirici veya nem alıcı kullanabilirsiniz.</li>
                </ul>
                
                <h2>4. Çizik ve Aşınmalarla Başa Çıkma</h2>
                <ul>
                    <li><strong>Küçük Çizikler:</strong> Çizik üzerine uygun renkte bir ahşap kalemi veya pastel boya sürün.</li>
                    <li><strong>Derin Çizikler:</strong> İnce zımpara kağıdı ile hafifçe zımparalayın ve ardından uygun bir ahşap boyası veya cila uygulayın.</li>
                </ul>
                
                <h2>5. Uzun Vadeli Bakım İpuçları</h2>
                <ul>
                    <li><strong>Cilayı Yenileyin:</strong> Her birkaç yılda bir mobilyalarınızı yeniden cilalayarak orijinal görünümünü geri kazandırabilirsiniz.</li>
                    <li><strong>Mobilyaları Sürüklemeyin:</strong> Masalarınızı ve sandalyelerinizi sürüklemek yerine kaldırarak taşıyın; bu, eklemlerdeki stresi ve zemindeki çizikleri önler.</li>
                    <li><strong>Düzenli Kontroller Yapın:</strong> Vida ve eklemleri gerektiğinde sıkın; bu, mobilyanın stabilitesini korumanıza yardımcı olur.</li>
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
