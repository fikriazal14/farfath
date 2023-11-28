<!DOCTYPE html>
<html>
<head>
<style>
    .popup-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1000;
    }

    .popup {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 20px;
        background-color: white;
        border: 1px solid #ccc;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        z-index: 1001;
    }

    .close-btn {
        display: block;
        margin-top: 10px;
    }
</style>

</head>
<body>
<?php
include 'functions_user.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if POST data is not empty
if (!empty($_POST)) {
    // Post data not empty insert a new record
    // Set-up the variables that are going to be inserted, we must check if the POST variables exist if not we can default them to blank
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    // Check if POST variable "name" exists, if not default the value to blank, basically the same for all variables
    $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
    $pesanan = isset($_POST['pesanan']) ? $_POST['pesanan'] : '';
    $jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';
    $notelp = isset($_POST['notelp']) ? $_POST['notelp'] : '';
    $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
    

    // Insert new record into the contacts table
    $stmt = $pdo->prepare('INSERT INTO pemesanan VALUES (?, ?, ?, ?, ?, ?)');
    $stmt->execute([$id, $nama, $pesanan, $jumlah, $notelp, $alamat]);
    // Output message
    $msg = 'Created Successfully!';
}
?>


<?=template_header('Create')?>

<div class="content update">
  <h2>Form Pemesanan</h2>
  <h2><b>Jika sudah Mengisi Form Pemesanan Silahkan Upload Bukti Pembayaran dan Desain Pada Menu Kontak</b></h2>
  <form action="create_user.php" method="post">
    <div class="form-group">
      <label for="id">ID</label>
      <input type="text" name="id" value="auto" id="id" class="form-control">
    </div>
    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" name="nama" id="nama" class="form-control">
    </div>
    <div class="form-group">
      <label for="jumlah">Jumlah</label>
      <input type="text" name="jumlah" id="jumlah" class="form-control">
    </div>
    <div class="form-group">
      <label for="notelp">No. Telp</label>
      <input type="text" name="notelp" id="notelp" class="form-control">
    </div>
    <div class="form-group">
      <label for="alamat">Alamat</label>
      <input type="text" name="alamat" id="alamat" class="form-control">
    </div>
    
    <input type="submit" value="Create" class="btn btn-primary">
  </form>
  <?php if ($msg): ?>
    <div class="popup-overlay"></div>
    <div class="popup">
        <p><?=$msg?></p>
        <button class="close-btn">Tutup</button>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var popupOverlay = document.querySelector(".popup-overlay");
            var popup = document.querySelector(".popup");
            var closeBtn = document.querySelector(".close-btn");

            popupOverlay.style.display = "block";
            popup.style.display = "block";

            closeBtn.addEventListener("click", function() {
                popupOverlay.style.display = "none";
                popup.style.display = "none";
            });
        });
    </script>
<?php endif; ?>

  </div>
    
  
</body>
</html>



