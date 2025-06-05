<form method="POST" action="">
  Nama: <input type="text" name="nama" required><br>
  Umur: <input type="number" name="umur" required><br>
  <input type="submit" value="Cek Status">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $umur = (int)$_POST['umur'];

    echo "Halo, $nama!<br>";
    if ($umur >= 18) {
        echo "Status: Dewasa";
    } else {
        echo "Status: Belum Dewasa";
    }
}
?>