<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMK CIPTA JASA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="stylesheet" href="./home.css" />
    <script defer src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script defer src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;500;700&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
          integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<!-- NAVBAR -->
<?php
$pages = [
    ["link" => "index.html", "name" => "Home"],
    ["link" => "about.html", "name" => "About Us"],
    ["link" => "contact.html", "name" => "Hubungi Kami"],
];
?>

<?php include 'navbar.php'; ?>

<!-- Foto -->
<div class="vector">
    <img src="assets/vector.svg" alt="vector" class="vector">
</div>
<div class="kolom">
    <div class="left-column">
        <div class="jargon">
            <h1>The Innovative School</h1>
        </div>
        <div class="visimisi">
            <p>Pelopor Inovasi SMK dibidang Teknologi di Indonesia</p>
        </div>
    </div>
    <div class="right-column">
        <div class="containerkh1">
            <div class="gambar1">
                <img src="assets/kotakhias1.png" alt="Gambar 1">
            </div>
            <div class="gambar2">
                <img src="assets/kotakhias2.png" alt="Gambar 2">
            </div>
            <div class="gambar3">
                <img src="assets/foto kelas.png" alt="Gambar 3">
            </div>
        </div>
    </div>
</div>

<!-- CARD -->
<div class="alasan1">
    <h1>Kenapa Harus Cipta Jasa ?</h1>
</div>
<div class="alasan2">
    <p>Alasan Kalian Harus Bergabung Dengan SMK CIPTA JASA</p>
</div>

<!-- CARD BARU -->
<div class="containercard">
    <div class="card" id="selebihnya">
        <div class="card-item">
            <img src="assets/bangunan.png" alt="icon 1" class="icon" />
            <p class="card-title">Fasilitas Lengkap</p>
            <p class="card-description">Kegiatan belajar dapat
                dilakukan dengan Kualitas
                Premium.</p>
        </div>
        <div class="card-item">
            <img src="assets/reuse.png" alt="icon 1" class="icon" />
            <p class="card-title">Lingkungan Asri</p>
            <p class="card-description">Lingkungan Asri bisa
                menjadi penunjang siswa
                agar merasa nyaman.</p>
        </div>
        <div class="card-item">
            <img src="assets/buku.png" alt="icon 1" class="icon" />
            <p class="card-title">Program Berkualitas</p>
            <p class="card-description">Menyediakan program
                pendidikan yang berkualitas
                tinggi.</p>
        </div>
        <div class="card-item">
            <img src="assets/industri.png" alt="icon 1" class="icon" />
            <p class="card-title">Kolaborasi Industri</p>
            <p class="card-description">Memiliki kerjasama yang erat dengan perusahaan dan industri</p>
        </div>
    </div>
</div>

<!-- SAMBUTAN KEPALA SEKOLAH -->

<div class="tentang-kami">
    <div class="left">
        <div class="image" id="image"></div>
    </div>
    <div class="right">
        <p class="title">Sambutan</p>
        <p class="title2">Kepala Sekolah</p>
        <div class="line"></div>
        <div class="selamatdatang">
            <p>Selamat Datang di SMK Cipta Jasa!!!</p>
            <p>Kepada seluruh siswa, guru, staf, dan orang tua siswa,</p>
        </div>
        <div class="containerparagraf">
            <p class="paragraf">
                Saya dengan bangga menyambut Anda di situs web resmi SMK Cipta Jaya.
                Sebagai Kepala Sekolah, saya merasa terhormat dan berkomitmen
                untuk memberikan pendidikan berkualitas tinggi dan menginspirasi para siswa
                kami untuk meraih potensi terbaik mereka.

            </p>

            <p class="paragraf2">
                Di SMK Cipta Jaya, kami juga memprioritaskan pendekatan holistik terhadap pendidikan.
                Kami mendorong partisipasi aktif dalam kegiatan ekstrakurikuler, seperti olahraga, seni,
                dan kegiatan sosial, untuk membangun jiwa kepemimpinan, kerjasama tim, dan keterampilan
                interpersonal.
            </p>

            <p class="paragraf3">
                Melalui situs web kami, Anda akan menemukan informasi yang berguna tentang kurikulum, kegiatan
                sekolah, pengumuman,
                dan berbagai sumber daya pendidikan. Kami berharap situs web ini dapat menjadi alat yang bermanfaat
                bagi siswa,
                orang tua, dan masyarakat untuk terus terhubung dengan kami.

            </p>

            <p class="paragraf4">
                Terima kasih atas kepercayaan Anda kepada kami.
                Mari bersama-sama menjalani perjalanan pendidikan
                yang membanggakan di SMK Cipta Jaya.
                Jika Anda memiliki pertanyaan atau butuh bantuan,
                jangan ragu untuk menghubungi kami.

            </p>
            <p class="salam">Salam hangat,</p>
            <p class="penutup"><b>Kepala Sekolah SMK Cipta Jasa</b></p>
        </div>
    </div>
</div>

<!-- VIDEO PROFIL -->
<div class="videoprofil">
    <div class="left">
        <p class="titlevideo1">Video</p>
        <p class="titlevideo2">Video Profile</p>
        <div class="videoparagraf1">
            <p>
                Video profil sekolah memperkenalkan kepada kaliam semua hal-hal
                yang berkaitan dengan lingkungan sekolah,
                fasilitas umum sekolah, fasilitas pembelajaran,
                ruang belajar, kegiatan siswa dan masih banyak lagi.
            </p>
        </div>
    </div>
    <div class="right">
        <div class="video-container">
            <video src="videoprofil.mp4" controls autoplay muted></video>
        </div>
    </div>
</div>

<!-- CARD SLIDESHOW PRODI -->
<div class="prodi1">
    <h1>Program Studi</h1>
</div>
<div class="prodi2">
    <p>Kenali lebih dalam program studi yang ada di SMK Cipta Jasa</p>
</div>

<!-- CARD SLIDER -->
<div class="slider-container swiper">
    <div class="slider-content">
        <div class="card-wrapper swiper-wrapper">
            <div class="card swiper-slide">
                <div class="image-content">
                    <span class="overlay"></span>
                    <div class="card-image">
                        <img src="./assets/foto kelas.png" class=" card-img" alt="" />
                    </div>
                </div>
                <div class="card-content">
                    <h2 class="name">Teknik Komputer dan Jaringan</h2>
                    <p class="description">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Labore
                        expedita aliquam, aut quia eum nihil.
                    </p>
                </div>
            </div>
            <!-- More slides go here -->
        </div>
    </div>
    <div class="swiper-button-next swiper-navBtn"></div>
    <div class="swiper-button-prev swiper-navBtn"></div>
</div>

<!-- OUR PARTNER SLIDESHOW -->
<div class="partner1">
    <h1>Hubungan Industri</h1>
</div>
<div class="partner2">
    <p>Kami bekerjasama dengan perusahaan ternama</p>
</div>

<div class="slideshow-container">
    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="assets/mikrotik-academy.png" style="width:100%" >
        <!-- <div class="text">Caption Text</div> -->
    </div>
    <!-- More slides go here -->
</div>

<!-- Scroll To Top -->
<div id="scrollToTopBtn">
    <i class="fas fa-chevron-circle-up"></i>
</div>
<!-- Scroll To Top -->

<!-- FOOTER -->
<footer>
  <?php include 'footer.php'; ?>
</footer>
<script src="main.js"></script>
</body>
</html>
