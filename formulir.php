<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="formulir.css">
  <title>Formulir Registrasi</title>
</head>

<body>
  <!-- NAVBAR -->
  <?php include 'navbar.php'; ?>

  <main>
    <div class="container">
      <h1>Formulir Registrasi</h1>
      <p>Mohon di isi dengan sejujur-jujurnya</p>

      <form id="form" action="process.php" method="POST">
        <fieldset>
          <h2>Data Siswa</h2><br>
          <!-- Nama -->
          <label for="nama">Nama Lengkap: <input type="text" name="nama" id="nama" required></label>
          <!-- Nama -->

          <!-- Jenis kelamin -->
          <div class="jenisKelamin">
            <label>Jenis Kelamin:</label>
            <label for="jenisKelamin1"><input type="radio" name="jenisKelamin" id="jenisKelamin" value="Laki-Laki"
                required>Laki-Laki </label>
            <label for="jenisKelamin2"><input type="radio" name="jenisKelamin" id="jenisKelamin" value="Perempuan"
                required>Perempuan </label>
          </div>
          <!-- Jenis Kelamin -->

          <!-- Tanggal Lahir -->
          <label for="tanggalLahir">Tanggal Lahir: <input type="date" name="tanggalLahir" id="tanggalLahir"
              required></label><br>
          <!-- Tanggal lahir -->

          <!-- Agama -->
          <label for="agama">Agama:
            <select name="agama" id="agama">
              <option value="">Pilih salah satu:</option>
              <option value="Islam">Islam</option>
              <option value="Kristen">Kristen</option>
              <option value="Katolik">Katolik</option>
              <option value="Hindu">Hindu</option>
              <option value="Buddha">Buddha</option>
              <option value="Konghucu">Konghucu</option>
            </select>
          </label><br>
          <!-- Agama -->

          <!-- Alamat -->
          <label for="alamat">Alamat: <textarea name="alamat" id="alamat" cols="30" rows="3"
              placeholder="Jl. Kapten Piere Tendean, Halong" required></textarea></label><br>
          <!-- Alamat -->

          <!-- Asal Sekolah -->
          <label for="asal-sekolah">Asal Sekolah: <input type="text" name="asal-sekolah" id="asal-sekolah"
              placeholder="SMPN 6 " required></label><br>
          <!-- Asal Sekolah -->

          <!-- No HP -->
          <label for="no-hp">Nomor HP: <input type="number" name="no-hp" id="no-hp" placeholder="081123xxxxxx"
              required></label><br>
          <!-- No HP -->

          <!-- Email -->
          <label for="email">Email: <input type="email" name="email" id="email" placeholder="novaria@gmail.com"
              required></label>
          <!--Email -->
        </fieldset>

        <fieldset>
          <h2>Data Orang Tua </h2><br>
          <!-- Nama Ayah -->
          <label for="nama-ayah">Nama Ayah: <input type="text" name="nama-ayah" id="nama-ayah"></label><br>
          <!-- Nama Ayah -->

          <!-- Nama Ibu -->
          <label for="nama-ibu">Nama Ibu: <input type="text" name="nama-ibu" id="nama-ibu"></label><br>
          <!-- Nama Ibu -->

          <!-- No HP -->
          <label for="no-hp-ortu">Nomor HP: <input type="number" name="no-hp-ortu" id="no-hp-ortu"
              placeholder="081123xxxxxx" required></label>
          <!-- No HP -->
          <br>
          <!-- Alamat -->
          <label for="alamat-ortu">Alamat: <textarea name="alamat-ortu" id="alamat-ortu" cols="30" rows="3"
              placeholder="Jl. Tebet Timur II" required></textarea></label>
          <!-- Alamat -->
        </fieldset>

        <fieldset>
          <!-- foto -->
          <label for="photo">Upload Photo:</label>
          <input type="file" name="photo" id="photo" accept="image/*">
          <!-- foto -->
          <br>
          <!-- Rata-Rata Nilai -->
          <label for="rata-nilai">Masukkan Rata-Rata Nilai Ujian Sebelumnya: <input type="number" name="rata-nilai"
              id="rata-nilai"></label>
          <!-- Rata-Rata Nilai -->
        </fieldset>
        <div class="verification">
          <input type="checkbox" name="verification" id="verification1" required>
          <label for="verification1">Data di atas sudah diisi dengan sejujur-jujurnya</label>
        </div>
        <div class="submit">
          <input type="submit" name="Submit" id="submit" value="Submit">
        </div>
      </form>
    </div>
  </main>
  <!-- <div class="notification" id="successNotification">
    Pesan telah terkirim
  </div> -->
  <?php include 'footer.php'; ?>

  <!-- Scroll To Top -->
  <div id="scrollToTopBtn">
    <i class="fas fa-chevron-circle-up"></i>
  </div>
  <!-- Scroll To Top -->
</body>
<script src="main.js"></script>

<script>
  // !-- Script to show the notification -->
  
  function showNotification() {
    alert('Pesan telah terkirim');
  }

  // Call the function to show the notification
  showNotification();

</script>
</html>