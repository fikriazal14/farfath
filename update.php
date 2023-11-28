<?php
include 'functions.php';
$pdo = pdo_connect_mysql();
$msg = '';
// Check if the contact id exists, for example update.php?id=1 will get the contact with the id of 1
if (isset($_GET['id'])) {
    if (!empty($_POST)) {
        // This part is similar to the create.php, but instead we update a record and not insert
        $id = isset($_POST['id']) ? $_POST['id'] : NULL;
        $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
        $pesanan = isset($_POST['pesanan']) ? $_POST['pesanan'] : '';
        $jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : '';
        $notelp = isset($_POST['notelp']) ? $_POST['notelp'] : '';
        $alamat = isset($_POST['alamat']) ? $_POST['alamat'] : '';
        
        
        // Update the record
        $stmt = $pdo->prepare('UPDATE pemesanan SET id = ?, nama = ?, pesanan = ?, jumlah = ?, notelp = ?, alamat = ? WHERE id = ?');
        $stmt->execute([$id, $nama, $pesanan, $jumlah, $notelp, $alamat, $_GET['id']]);
        $msg = 'Updated Successfully!';
    }
    // Get the contact from the contacts table
    $stmt = $pdo->prepare('SELECT * FROM pemesanan WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $contact = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$contact) {
        exit('Contact doesn\'t exist with that ID!');
    }
} else {
    exit('No ID specified!');
}
?>



<?=template_header('Read')?>

<div class="content update">
	<h2>Update Contact #<?=$contact['id']?></h2>
    <form action="update.php?id=<?=$contact['id']?>" method="post">
  <div class="form-group">
    <label for="id">ID</label>
    <input type="text" name="id" value="<?=$contact['id']?>" id="id" class="form-control" readonly>
  </div>
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" name="nama" value="<?=$contact['nama']?>" id="nama" class="form-control">
  </div>
  <div class="form-group">
    <label for="pesanan">Pesanan</label>
    <input type="text" name="pesanan" value="<?=$contact['pesanan']?>" id="title" class="form-control">
  </div>
  <div class="form-group">
    <label for="jumlah">Jumlah</label>
    <input type="text" name="jumlah" value="<?=$contact['jumlah']?>" id="jumlah" class="form-control">
  </div>
  <div class="form-group">
    <label for="notelp">No. Telp</label>
    <input type="text" name="notelp" value="<?=$contact['notelp']?>" id="notelp" class="form-control">
  </div>
  <div class="form-group">
    <label for="alamat">Alamat</label>
    <input type="text" name="alamat" value="<?=$contact['alamat']?>" id="alamat" class="form-control">
  </div>
  
  <input type="submit" value="Update" class="btn btn-primary mt-3">
</form>

    <?php if ($msg): ?>
    <p><?=$msg?></p>
    <?php endif; ?>
</div>

<?=template_footer()?>