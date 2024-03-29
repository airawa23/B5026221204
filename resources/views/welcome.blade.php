<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Kopi Manji Website</title>
    <!-- link to css -->
    <link rel="stylesheet" href="style.css">
    <!-- link to box icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- link to fontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Navbar -->
    <nav>
        <div class="navbar">
            <i class='bx bx-menu sidebarOpen'></i>
            <span class="logo openLogo"><a href="#"></a><img src="img/logoKopiManji.png" alt=""></a></span>

            <div class="menu">
                <div class="logoToggle">
                    <span class="logo"><a href="#"></a><img src="img/logoKopiManji.png" alt=""></a></span>
                    <i class='bx bx-x sidebarClose'></i>
                </div>
                <!-- links -->
                <ul class="navlinks">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#menu">Menu</a></li>
                    <li><a href="#lokasi">Lokasi</a></li>
                    <li><a href="#kontak">Kontak</a></li>
                    <li><a href="#tentang-kami">Tentang Kami</a></li>
                    <li><a href="#Assigment">Assigment</a></li>
                </ul>
            </div>

            <div class="searchBox">
                <div class="searchToggle">
                    <i class='bx bx-x cancel'></i>
                    <i class='bx bx-search search'></i>
                </div>

                <div class="searchField">
                    <input type="text" placeholder="Search...">
                    <i class='bx bx-search'></i>
                </div>
            </div>

        </div>
    </nav>
    <!-- Home Section -->
    <section class="homepage" id="home">
        <div class="homeText">
            <h1>Start your day <br> with coffee</h1>
            <br>
            <p>At Kopi Manji, we are passionate about serving you the finest coffee and creating a cozy atmosphere
                for you to enjoy. Whether you're looking for a classic espresso or a unique specialty blend, we have it
                all.</p>
        </div>

        <div class="emailBox">
            <h3>Subcribe to Our Newsletter</h3>
            <p>Get the latest updates and offers delivered to your inbox.</p>

            <form action="javascript:void(0);" id="emailForm" method="get" onsubmit="return validateform();">
                <div class="inputbox">
                    <input type="email" name="" id="email" placeholder="Masukkan email" required>
                    <span id="text"></span>
                </div>
                <button class="subcribeBtn" type="submit">Subcribe</button>
            </form>

        </div>
    </section>
    <!-- Menu Section -->
    <section class="menu" id="menu">
        <div class="heading">
            <h2>Our Menu</h2>
        </div>
        <!-- Menu Container -->
        <div class="menuCont">
            <div class="box">
                <img src="img/latte.jpg">
                <h3>Latte</h3>
                <p>A smooth and rich coffee drink, made from espresso and milk. Lattes usually have milk foam on top.
                </p>
            </div>
            <div class="box">
                <img src="img/calatte.jpg">
                <h3>Caramel Latte</h3>
                <p>A convenient version of a caramel latte in a bottle. Served in a ready-to-drink bottle.
                </p>
            </div>
            <div class="box">
                <img src="img/yakult.jpg">
                <h3>Mangga Yakult</h3>
                <p>A fresh drink made from a mixture of mango juice and the Yakult. It tastes delicious and refreshing.
                </p>
            </div>
            <div class="box">
                <img src="img/susu.jpg">
                <h3>Oreo</h3>
                <p>A sweet and savory drink made from milk mixed with Oreo crumbs.
                </p>
            </div>
            <div class="box">
                <img src="img/thaitea.jpg">
                <h3>Thai Tea</h3>
                <p>Thai tea is a mixture of black tea with sweetened condensed milk.
                </p>
            </div>
            <div class="box">
                <img src="img/avocado.jpg">
                <h3>Avocado Latte</h3>
                <p>An innovative latte that combines espresso with avocado.
                </p>
            </div>
        </div>
    </section>
    <!-- Lokasi Section -->
    <section class="lokasi" id="lokasi">
        <div class="headingloc">
            <h2>Lokasi</h2>
        </div>
        <div class="mapContainer">
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1015552.085922339!2d105.56534673906901!3d-6.13065545544825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f532d6fde615%3A0x5d0ab25d6fc93e13!2sKopi%20Manji%20Plus!5e0!3m2!1sid!2sid!4v1697811103311!5m2!1sid!2sid"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="detailLocation">
                <div class="loc" id="jkt">
                    <h3>Jakarta</h3>
                    <p>Jelambar, Kayu Manis, Kemayoran, Pangkalan Asem, PIK, Tegal Alur, Rawamangun Square,
                        Jatinegara
                    </p>
                </div>
                <div class="loc">
                    <h3>Bekasi</h3>
                    <p>Pejuang, Aren Jaya</p>
                </div>
                <div class="loc">`
                    <h3>Bali</h3>
                    <p>Banyuasri</p>
                </div>
                <div class="loc">
                    <h3>Semarang</h3>
                    <p>Patemon</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Kontak Section -->
    <section class="kontak" id="kontak">
        <div class="heading-kontak">
            <h2>Kontak Kami</h2>
        </div>
        <div class="kontak-page">
            <a href="https:/wa.me/6281218515289" target="_blank" class="whatsapp_float"><i
                    class="fa-brands fa-whatsapp whatsapp-icon"></i></a>
            <div class="container-kontak">
                <div class="work-day">
                    <h2>Hari Kerja</h2>
                    <p>senin - Sabtu</p>
                    <p>08 AM - 10 PM</p>
                </div>
                <div class="kontak-detail">
                    <div class="detail">
                        <h2>telepon</h2>
                        <p>Jessica - 081319999350</p>
                        <p>James - 081218515289</p>
                    </div>
                    <div class="detail">
                        <h2>email</h2>
                        <p>admin@kopimanji.co.id</p>
                    </div>
                    <div class="detail">
                        <h2>Alamat</h2>
                        <p>Jalan Bendungan Jago No 16 Kelurahan Utan Panjang, Kecamatan Kemayoran, Jakarta Pusat 10650.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Tentang Kami Section -->
    <section class="aboutpage" id="tentang-kami">
        <div class="heading-about">
            <h1>Tentang Kami</h1>
        </div>
        <div class="about-container">
            <div class="first-content">
                <!-- <img src="img/biji-kopi.jpg"> -->
                <h2>Kopi Manji berdiri sejak April 2019 dengan sebuah prinsip dimana kami hanya menggunakan biji kopi
                    asli Indonesia untuk setiap produk kopi kami.</h2>
                <h2>Kami memiliki Visi untuk membantu masyarakat Indonesia supaya bisa lebih mencintai Kopi Indonesia
                </h2>
                <h2>Kami juga bertekad untuk menjadi brand kopi ternama di Indonesia yang menargetkan seluruh kalangan
                    untuk turut serta merasakan kenikmatan kopi asli produksi Indonesia.</h2>
                </h2>
            </div>
            <div class="second-content">
            </div>
        </div>
    </section>
    <!-- Assigment Section -->
    <section class="assigment" id="Assigment">
        <div class="assignmentText">
            <h1>Daftar Link Tugas</h1>
            <br>
            <ul>
                <a href="layout">Layout</a>
                <a href="linktree">LinkTree</a>
                <a href="javascript">javascript</a>
                <a href="hello">hello</a>
                <a href="responsive">responsive</a>
            </ul>
        </div>
    <script src="main.js"></script>
</body>

</html>
