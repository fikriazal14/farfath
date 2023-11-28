<?php
include 'functions.php';
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
  <h2>Create Contact</h2>
  <form action="create.php" method="post">
    <div class="form-group">
      <label for="id">ID</label>
      <input type="text" name="id" value="auto" id="id" class="form-control">
    </div>
    <div class="form-group">
      <label for="nama">Nama</label>
      <input type="text" name="nama" id="nama" class="form-control">
    </div>
    <div class="form-group">
      <label for="pesanan">Pesanan</label>
      <select name="pesanan" id="pesanan" class="form-control">
        <option value="option1">Gelas 12oz Datar</option>
        <option value="option2">Gelas 16oz Datar</option>
        <option value="option3">Gelas 22oz Datar</option>
        <!-- Add more options as needed -->
      </select>
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
    <p><?=$msg?></p>
  <?php endif; ?>
</div>



<?=template_footer()?>