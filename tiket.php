<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $event = htmlspecialchars($_POST['event']);
    $quantity = (int)$_POST['quantity'];

    // Simpan data ke file atau database
    $file = fopen("data_tiket.txt", "a");
    $data = "Nama: $name, Email: $email, Event: $event, Jumlah Tiket: $quantity\n";
    fwrite($file, $data);
    fclose($file);

    // Redirect ke halaman sukses
    header('Location: success.php');
    exit;
}
?>