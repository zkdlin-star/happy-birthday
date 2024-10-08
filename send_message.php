<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $subject = htmlspecialchars($_POST['subject']);
            $message = htmlspecialchars($_POST['message']);

            // Ganti dengan email tujuanmu
            $to = "emailkamu@example.com";
            $headers = "From: " . $email;
            $body = "Name: $name\nEmail: $email\nMessage: $message";

            if (mail($to, $subject, $body, $headers)) {
                echo "<p style='color:green;'>Pesan berhasil dikirim!</p>";
            } else {
                echo "<p style='color:red;'>Pesan gagal dikirim!</p>";
            }
        }
        ?>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Koneksi ke database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "my_database";  // Sesuaikan dengan nama database kamu

    // Membuat koneksi
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Cek koneksi
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query untuk menyimpan data ke database
    $sql = "INSERT INTO contacts (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Pesan berhasil dikirim!";
        // Bisa redirect ke halaman sukses atau kembali ke halaman kontak
        header("Location: sukses.html"); // Redirect setelah sukses (opsional)
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Tutup koneksi
    $conn->close();
}
?>
