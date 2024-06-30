<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="process.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php
        // Import the database connection
        require 'db_connection.php';

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $name = $_POST["nama"];
            $gender = $_POST["jenisKelamin"];
            $tanggal_lahir = $_POST["tanggalLahir"];
            $agama = $_POST["agama"];
            $alamat = $_POST["alamat"];
            $asal_sekolah = $_POST["asal-sekolah"];
            $no_hp = $_POST["no-hp"];
            $email = $_POST["email"];
            $nama_ayah = $_POST["nama-ayah"];
            $nama_ibu = $_POST["nama-ibu"];
            $no_hp_ortu = $_POST["no-hp-ortu"];
            $alamat_ortu = $_POST["alamat-ortu"];
            $photo = ""; // Placeholder for now
            $rata_nilai = $_POST["rata-nilai"];

            // Prepare the SQL query using placeholders to avoid SQL injection
            $query = "INSERT INTO siswa (name, gender, tanggal_lahir, agama, alamat, asal_sekolah, no_hp, email, 
                nama_ayah, nama_ibu, no_hp_ortu, alamat_ortu, photo, rata_nilai) 
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            // Create a prepared statement
            $stmt = $conn->prepare($query);

            // Bind the form data to the placeholders in the prepared statement
            $stmt->bindParam(1, $name);
            $stmt->bindParam(2, $gender);
            $stmt->bindParam(3, $tanggal_lahir);
            $stmt->bindParam(4, $agama);
            $stmt->bindParam(5, $alamat);
            $stmt->bindParam(6, $asal_sekolah);
            $stmt->bindParam(7, $no_hp);
            $stmt->bindParam(8, $email);
            $stmt->bindParam(9, $nama_ayah);
            $stmt->bindParam(10, $nama_ibu);
            $stmt->bindParam(11, $no_hp_ortu);
            $stmt->bindParam(12, $alamat_ortu);
            $stmt->bindParam(13, $photo);
            $stmt->bindParam(14, $rata_nilai);

            // Execute the prepared statement
            $stmt->execute();

            

            // Redirect back to the form with a success message
            header("Location: formulir.php?message=Pesan telah terkirim");
            exit;
        }
        ?>

    </div>
</body>

</html>
