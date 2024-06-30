<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
  <title>Contact Us</title>
</head>

<body>
  <!-- NAVBAR -->
  <?php include 'navbar.php'; ?>

  <!--------contact us--------->
  <section class="location">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15829.489714688147!2d112.72475835606689!3d-7.311991535797617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbd1cb925a1d%3A0x1dbecb0b2e9b059f!2sInstitut%20Teknologi%20Telkom%20Surabaya!5e0!3m2!1sid!2sid!4v1685699812021!5m2!1sid!2sid"
      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </section>
  <section class="contact-us">
    <div class="row">
      <div class="contact-col">
        <div>
          <a href="https://goo.gl/maps/uuuJurFPBd3jKAJfA"> <i class="fa-solid fa-house"></i></a>
          <h5>Jalan ABC, Gedung XYZ</h5>
        </div>
        <div>
          <a href="https://wa.me"><i class="fa-solid fa-phone"></i></a>
          <h5>+6281xxxxxxxx</h5>
        </div>
        <div>
          <a href="mailto:SMKCJASA@gmail.com"><i class="fa-solid fa-envelope"></i></a>
          <span>
            <h5>SMKCJasa@gmail.com</h5>
          </span>
        </div>
        <div class="contact-col">
          <form id="myForm" action="process_contact.php" method="POST">
            <input type="text" id="name" name="name" placeholder="Masukkan Nama" required>
            <input type="email" id="email" name="email" placeholder="Masukkan Email" required>
            <input type="text" id="judul" name="subject" placeholder="Masukan Judul" required>
            <textarea rows="8" id="pesan" name="message" placeholder="Pesan" required></textarea>
            <button type="submit" class="hero-btn red-btn" value="Simpan">Kirim Pesan</button>
          </form>
        </div>
      </div>
  </section>

  <!-- Footer -->
  <?php include 'footer.php'; ?>
  <!-- Footer -->

  <!-- Scroll To Top -->
  <div id="scrollToTopBtn">
    <i class="fas fa-chevron-circle-up"></i>
  </div>
  <!-- Scroll To Top -->
</body>
<script src="main.js"></script>
</html>
